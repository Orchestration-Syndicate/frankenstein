<?php

/*
 * Entry point for the ClimbUI application
 */

namespace Frankenstein;

use Approach\Render\HTML;

// disable errors
error_reporting(0);

global $body, $webpage;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

$webpage = new HTML(tag: 'html');
$webpage->before = '<!DOCTYPE html>' . PHP_EOL;

$head = new HTML(tag: 'head');
$head[] = $pageTitle = new HTML(tag: 'title', content: 'ClimbUI');
$head[] = new HTML(tag: 'meta', attributes: [
    'charset' => 'utf-8',
], selfContained: true);
$head[] = new HTML(tag: 'meta', attributes: [
    'http-equiv' => 'X-UA-Compatible',
    'content' => 'IE=edge',
], selfContained: true);
$head[] = new HTML(tag: 'meta', attributes: [
    'name' => 'viewport',
    'content' => 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0',
], selfContained: true);
$head[] = new HTML(tag: 'meta', attributes: [
    'name' => 'author',
    'content' => 'Ishan Joshi',
], selfContained: true);

// We will be using Bootstrap for the layout
$head[] = new HTML(tag: 'link', attributes: [
    'rel' => 'stylesheet',
    'href' => '//cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css',
], selfContained: true);

// Rest are some custom styles and scripts
$head[] = new HTML(tag: 'link', attributes: [
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '/static/css/layout.css',
], selfContained: true);
$head[] = new HTML(tag: 'link', attributes: [
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '/static/css/style.css',
], selfContained: true);
$head[] = new HTML(tag: 'link', attributes: [
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '/static/css/reset.css',
], selfContained: true);
/*$head[] = new HTML(tag: 'link', attributes: [*/
/*    'rel' => 'stylesheet',*/
/*    'type' => 'text/css',*/
/*    'href' => '/static/css/menu.css',*/
/*], selfContained: true);*/

$head[] = $pageTitle;

$head[] = new HTML(tag: 'link', attributes: [
    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
    'rel' => 'stylesheet',
], selfContained: true);
$head[] = new HTML(tag: 'link', attributes: [
    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
    'rel' => 'stylesheet',
], selfContained: true);

// JQuery baby!!
$head[] = new HTML(tag: 'script', attributes: [
    'src' => '//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js',
]);

// The actual approach library
$head[] = new HTML(tag: 'script', attributes: [
    'type' => 'text/javascript',
    'src' => '/static/js/approach/approach.interface.js',
]);
$head[] = new HTML(tag: 'script', attributes: [
    'type' => 'text/javascript',
    'src' => '/static/js/approach/approach.utility.js',
]);
/*$head[] = new HTML(tag: 'script', attributes: [*/
/*    'type' => 'text/javascript',*/
/*    'src' => '/static/js/approach/approach.displace.js',*/
/*]);*/

$head[] = new HTML(tag: 'script', attributes: [
    'src' => '/static/js/main.js',
    'type' => 'module',
]);

$body = new HTML(tag: 'body');

$body->content = <<<HTML
    <section id="Backdrop" class="Screen"></section>

    <section id="Main" class="Screen">
        <!-- Left Panel -->
        <section id="LeftPanel" class="panel-content Interface InterfaceContent controls" data-api="/server.php" data-api-method="POST" >
            <div style="display: flex; margin-right: 1rem;;">
                <label for="source">source</label>
                <select name="source" style="height: 30px; margin-left: 10px">
                    <option value="jd">Component::ActionBox</option>
                </select>
                <button style="margin-left: 70px;">auto match</button>
                <button style="margin-left: 70px;">hide bound</button>
            </div>
            <ul class="Oyster">
                <div    class="visual control"
                        data-intent='{ "REFRESH": { "Menu" : "Base" } }'
                        data-context='{ "_response_target": "#LeftPanel > .Oyster" }'>
                    <span>Load Menu</span>
                </div>
                <div class="control" data-role="trigger" data-action="toggleNextContainer">
                    <span>Try Animation</span>
                </div>
            </ul>
        </section>

        <!-- Right Panel -->
        <section id="RightPanel" class="panel-content">
            <div style="display: flex;">
                <label for="target">target</label>
                <input type="text" name="target" placeholder="Component::ActionBox" style="margin-left: 5px;" />
                <label for="tag">tag</label>
                <input type="text" name="tag" placeholder="settings" style="margin-left: 5px;" />
                <button style="margin-left: 50px;">load tag</button>
                <button style="margin-left: 50px;">save</button>
                <button style="margin-left: 50px;">empty only</button>
            </div>
            <h2>Target Component: ActionBox</h2>
            <div class="component-section">
                <h3>_self_id 1 | Suite_TextInput</h3>
                <input type="text" name="_self_id_1" placeholder="_self_id 1" />
            </div>
            <div class="component-section">
                <h3>title 1 | Suite_TextInput</h3>
                <input type="text" name="title_1" placeholder="title 1" />
            </div>
            <div class="component-section">
                <h3>opacity 1 | Suite_TextInput</h3>
                <input type="text" name="opacity_1" placeholder="opacity 1" />
            </div>
            <div class="component-section">
                <h3>link 1 | Suite_LinkInput</h3>
                <input type="text" name="link_1" placeholder="link 1" />
            </div>
            <div class="component-section prop-type-container">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="name" />
                <label for="prop_type">prop type</label>
                <select name="prop_type">
                    <option value="Suite_TextInput">Suite_TextInput</option>
                    <option value="Suite_LinkInput">Suite_LinkInput</option>
                </select>
                <button type="button">Add</button>
            </div>
        </section>
    </section>

    <section id="Overlay" class="Screen"></section>
    <section id="Offscreen" class="Screen"></section>
    <script>
    function changeMenu(info){
        // Remove the active class from current selector
        \$(info.selector).find("div").removeClass('active');
        let strippedSelector = info.selector.substring(0, info.selector.lastIndexOf('>'));
        let sel = strippedSelector.trim();
        // Remove it from all it's parents too
        \$(sel).find("div").removeClass('active');
        // Add the active class to the new selector
        \$(info.selector + " > .components").find("div").addClass("active");
        return sel
    }
    </script>
    HTML;

$webpage[] = $head;
$webpage[] = $body;

echo $webpage->render();
