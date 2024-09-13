<?php

namespace Frankenstein\Service;

use Approach\deploy;
use Approach\path;
use Approach\Scope;
use Approach\Service\flow;
use Approach\Service\format;
use Approach\Service\Service;
use Approach\Service\target;
use Frankenstein\Render\Intent;
use Frankenstein\Render\OysterMenu\Oyster;
use Frankenstein\Render\OysterMenu\Pearl;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Server extends Service
{
    public static array $registrar = [];
    protected Scope $scope;

    static function listFiles($path, $isRoot = true, $stripPHP = false)
    {
        $result = $isRoot ? ['root' => []] : [];
        $items = scandir($path);

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $fullPath = $path . DIRECTORY_SEPARATOR . $item;

            if (is_dir($fullPath)) {
                $result[$item] = self::listFiles($fullPath, false, $stripPHP);
            } else {
                if ($stripPHP) {
                    $item = str_replace('.php', '', $item);
                }

                if ($isRoot) {
                    $result['root'][] = $item;
                } else {
                    $result[] = $item;
                }
            }
        }

        return $result;
    }

    public function MakeMenu($context)
    {
        $resource_path = $this->scope->GetPath(path::resource);
        $resource_path = str_replace('//', '/src/', $resource_path);


        $pearls = [];
        $target = $context['_response_target'];
        $path = $resource_path . $context['path'];
        $entries = self::listFiles($path, true, true);

        foreach ($entries as $entry => $data) {
            if ($entry === 'root') {
                continue;
            }

            $visual = new Intent(
                tag: 'div',
                classes: ['control', ' visual'],
                context: ['_response_target' => $target, 'id' => $entry, 'path' => $context['path'] . '/' . $entry],
                intent: ['REFRESH' => ['Menu' => 'Base']],
                api: '/server.php',
                method: 'POST',
            );

            $visual->content = $entry;

            $pearl = new Pearl($visual);
            $pearl->attributes['data-pearl'] = $entry;

            $pearls[] = $pearl;
        }

        $oyster = new Oyster(pearls: $pearls);

        return [
            'REFRESH' => [
                $context['_response_target'] => $oyster->render(),
            ],
        ];
    }

    public function __construct(
        flow $flow = flow::in,
        bool $auto_dispatch = false,
        ?format $format_in = format::json,
        ?format $format_out = format::json,
        ?target $target_in = target::stream,
        ?target $target_out = target::stream,
        $input = [Service::STDIN],
        $output = [Service::STDOUT],
        mixed $metadata = [],
    ) {

        $path_to_project = __DIR__ . '/../../src/';
        $path_to_approach = __DIR__ . '/../../support/lib/approach/';
        $path_to_support = __DIR__ . '/../../support/';

        $this->scope = new Scope(
            project: 'Frankenstein',
            path: [
                path::project->value => $path_to_project,
                path::installed->value => $path_to_approach,
                path::support->value => $path_to_support,
            ],
            deployment: [
                deploy::base->value => 'localhost',
                deploy::ensemble->value => 'localhost',
                deploy::resource->value => 'localhost',
                deploy::resource_user->value => 'root',
            ]
        );

        self::$registrar['Menu']['Base'] = function ($context) {
            return $this->MakeMenu($context);
        };
        parent::__construct($flow, $auto_dispatch, $format_in, $format_out, $target_in, $target_out, $input, $output, $metadata);
    }

    function processIntents($intent): array
    {
        $result = [];
        if (
            is_array($intent) &&
            !isset($intent['support']) &&
            !isset($intent['command'])
        ) {
            foreach ($intent as $i) {
                $predicated_result = $this->processIntent($i);
                $result = array_merge($result, $predicated_result);
            }
            return $result;
        } else {
            return $this->processIntent($intent);
        }
    }

    /**
     * Process a generic intent
     *
     * @param array $intent
     * @return array
     */
    public function processIntent(array $intent): array
    {
        $result = [];
        $context = $intent['support'];
        $command = $intent['command'];
        foreach ($command as $predicate => $action) {
            $scope = key($action);
            $call = $action[$scope];

            if (!isset(self::$registrar[$scope][$call])) {
                $result = [
                    'APPEND' => ['#APPROACH_DEBUG_CONSOLE' => '<br /><p>' . 'Unmatched intent! <br />' . var_export($intent, true) . '</p><br />']
                ];
            } else {
                $result = self::$registrar[$scope][$call]($context);
            }
        }
        return $result;
    }

    public function Process(?array $payload = null): void
    {
        $payload = $payload ?? $this->payload;

        foreach ($payload as $index => $intent) {
            $this->payload[$index] = $this->processIntents($intent);
        }
    }
}
