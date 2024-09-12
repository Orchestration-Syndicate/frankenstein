<?php

namespace Tests\Unit;

use Approach\Resource\MariaDB\Server;
use Approach\Service\MariaDB\Connector;
use Approach\deploy;
use Approach\nullstate;
use Approach\path;
use Approach\Scope;
use Tests\Support\UnitTester;

class ResourceCest
{
    protected Connector $connector;

    protected $server;
    protected $resource;
    protected $scope;

    public function _before()
    {
        $path_to_project = __DIR__ . '/../../src';
        $path_to_approach = __DIR__ . '/../../support/lib/approach';
        $path_to_support = __DIR__ . '/../../support';

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

        $this->server = new Server(
            host: 'localhost',  // Scope::GetDeploy( deploy::resource ),
            user: 'root',  // Scope::GetDeploy( deploy::resource_user ),
            port: 3306,
            pass: 'NoobScience',
            database: 'test',
            label: 'MenuData',
            // skip_connection: true
        );
    }

    public function _after()
    {
        if (isset($this->connector) && $this->connector->connection->connect_errno > 0) {
            $this->connector->disconnect();
        }

        unset($this->connector);
        unset($this->server);
        unset($this->resource);
        unset($this->scope);
    }

    // tests
    public function connectToDatabase(UnitTester $I)
    {
        $state = $this->server->connect();
        $this->connector = $this->server->connector;

        $I->assertTrue(
            $state instanceof nullstate ||
                is_int($state)
        );

        if (!($state instanceof nullstate) && $state > 0) {
            $I->outputError($this->connector->connection->connect_error);
        } elseif ($state instanceof nullstate && $state !== nullstate::defined) {
            switch ($state) {
                case nullstate::undefined:
                    $I->outputError('The connection state was undefined.');
                    break;
                case nullstate::undeclared:
                    $I->outputError('The connection state was undeclared.');
                    break;
                case nullstate::ambiguous:
                    $I->outputError('The connection state was ambiguous.');
                    break;
                case nullstate::null:
                    $I->outputError('The connection state was null.');
                    break;
                default:
                    $I->outputError('The connection state was vey ambiguous.');
                    break;
            }
        }

        $I->assertEquals($state, nullstate::defined);
    }

    public function checkServerDiscovery(UnitTester $I)
    {
        $this->server->discover();
    }
}
