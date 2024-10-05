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
$head[] = new HTML(tag: 'script', attributes: [
    'type' => 'text/javascript',
    'src' => '/static/js/approach/approach.autoform.js',
]);

$head[] = new HTML(tag: 'script', attributes: [
    'src' => '/static/js/main.js',
    'type' => 'module',
]);

$body = new HTML(tag: 'body', classes: ['Interface', ' InterfaceContent']);

$body->content = <<<HTML
    <section id="Backdrop" class="Screen"></section>

    <section id="Main" class="Screen controls">
        <div id="test_area"></div>
        <!-- Left Panel -->
        <section id="LeftPanel" class="panel-content  controls" data-api="/server.php" data-api-method="POST" >
            <div style="display: flex; margin-right: 1rem;;">
                <label for="source">source</label>
                <select name="source" style="height: 30px; margin-left: 10px">
                    <option value="jd">Component::ActionBox</option>
                </select>
                <button style="margin-left: 70px;">auto match</button>
                <button style="margin-left: 70px;">hide bound</button>
            </div>
            <div class="Oyster">
                <div class="header control"
                    data-intent='{ "REFRESH": { "Menu" : "Base" } }'
                    data-context='{ "_response_target": "#LeftPanel > .Oyster" }'>
                <span>Load Menu</span>
                </div>
            </div>
        </section>

        <!-- Right Panel -->
        <form id="RightPanel" class="Autoform panel-content" data-action="Menu">
            <div style="display: flex;">
                <label for="target">target</label>
                <input type="text" name="target" placeholder="Component::ActionBox" style="margin-left: 5px;" />
                <label for="tag">tag</label>
                <input type="text" name="tag" placeholder="settings" style="margin-left: 5px;" />
                <button style="margin-left: 50px;">load tag</button>
                <button type="button" class="control" data-role="autoform" data-intent='{ "REFRESH" : { "Menu" : "Save" } }' data-api-method="POST" data-context='{ "_response_target" : "#test_area" }' style="margin-left: 50px;">save</button>
                <button style="margin-left: 50px;">empty only</button>
            </div>
            <div class="Oyster">
                <div class="header">
                    <h2>Target Component: ActionBox</h2>
                </div>
                <ul class="Toolbar">
                </ul>
                <div class="component-section prop-type-container">
                    <label for="name">Name</label>
                    <input type="text" name="addProp" class="addProp" placeholder="name" />
                    <label for="prop_type">prop type</label>
                    <select name="prop_type">
                        <option value="Suite_TextInput">Suite_TextInput</option>
                        <option value="Suite_LinkInput">Suite_LinkInput</option>
                    </select>
                    <button type="button" class="control" data-role="trigger" data-action="new-setting.mapper">Add</button>
                </div>
            </div>
        </form>
    </section>

    <section id="Overlay" class="Screen">
        <div id="IconPicker" class="controls">
            <ul>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-gear"></i>
                    <span class="label">Gear</span>
                </li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-lightbulb"></i>
                    <span class="label">LightBulb</span>
                </li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-boombox"></i>
                    <span class="label">BoomBox</span></li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-chat"></i>
                    <span class="label">Chat</span>
                </li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-egg"></i>
                    <span class="label">Egg</span>
                </li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-laptop"></i>
                    <span class="label">Laptop</span>
                </li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-hdd"></i>
                    <span class="label">Database</span></li>
                <li class="control" data-role="trigger" data-action="toolbar-append.mapper"><i class="icon bi bi-cloud"></i>
                    <span class="label">Cloud</span>
                </li>
            </ul>
        </div>
    </section>
    <section id="Offscreen" class="Screen">
        <li class="mapper-pearl" data-pearl="">
            <div class="control visual">
                <i class="fa"></i>
                <label onclick="toggleDiv(event)">Mapper</label>
                <i class="fa fa-arrow-right"></i>
            </div>
            <ul></ul>
        </li>

    <div class="mappable-body">
    <label>
        prop type
        <select class="mapper-input source-select">
            <option value="TextInput"> TextInput </option>
            <option value="TextArea"> TextArea </option>
            <option value="NumericRange"> NumericRange </option>
            <option value="NumericRange_WithSuggestions"> NumericRange_WithSuggestions </option>
            <option value="DateRange"> DateRange </option>
            <option value="LinkInput"> LinkInput </option>
            <option value="DropDown"> DropDown </option>
            <option value="Upload"> Upload </option>
            <option value="Toggle"> Toggle </option>
            <option value="Preset"> Preset </option>
            <option value="ColorPicker"> ColorPicker </option>
            <option value="RichText"> RichText </option>
            <option value="RangeSlider"> RangeSlider </option>
            <option value="Compositor_ContainerSettings"> Compositor_ContainerSettings </option>
            <option value="Subcomponent"> Subcomponent </option>
            <option value="">  </option>
            <option value="Checklist"> Checklist </option>
            <option value="Multiselect"> Multiselect </option>
            <option value="Radio"> Radio </option>
            <option value="Checkgroup"> Checkgroup </option>
            <option value="Tabs"> Tabs </option>
            <option value="Actions"> Actions </option>
            <option value="Teams"> Teams </option>
            <option value="Date"> Date </option>
            <option value="NumericInput"> NumericInput </option>
        </select>
    </label>
    <div><label> default <input class="mapper-input"></label></div>
    <div><label> label <input class="mapper-input"></label></div>
    <div class="control" data-role="trigger" data-action="new-setting.mapper"><label> disabled <input type="checkbox" class="mapper-input"></label></div>
    <div class="control" data-role="trigger" data-action="new-setting.mapper"><label> hidden <input type="checkbox" class="mapper-input"></label></div>
    <div><label> group number <input type="number" class="mapper-input"></label></div>
    <div class="control" data-role="trigger" data-action="new-setting.mapper"><label> required <input type="checkbox" class="mapper-input"></label></div>
    <div class="toolbar">
        <input type="hidden" name="toolbar" value="{}" />
    </div>
    <div class="control" data-role="trigger" data-action="toolbar-enable.mapper"><label> Toolbar <input type="checkbox" class="mapper-input"></label></div>
    <!---->
    <div><label> source <input class="mapper-input"></label></div>
    <div><label> extra <input class="mapper-input"></label></div>
            <!---->
    <input type="hidden" name="composed" value="{}" />
    <div><label> formatter <input class="mapper-input"></label></div>
    <div><label> sanitizer <input class="mapper-input"></label></div>
    <div><label> validator <input class="mapper-input"></label></div>
    </div>

    <div class="mapper-field">
        <div class="visual control">
            <i class="fa"></i>
            <label>TextInput</label>
            <span class="control" data-role="trigger" data-action="composed-up.mapper">
                <i class="fa fa-arrow-up"></i>
            </span>
            <span class="control" data-role="trigger" data-action="composed-down.mapper">
                <i class="fa fa-arrow-down"></i>
            </span>
            <span class="control" data-role="trigger" data-action="new-setting.mapper">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </div>

    <div class="toolbar-icon">
        <span class="visual control">
            <span class="control" data-role="trigger" data-action="toolbar-up.mapper">
                <i class="fa fa-arrow-up"></i>
            </span>
            <span class="control" data-role="trigger" data-action="toolbar-down.mapper">
                <i class="fa fa-arrow-down"></i>
            </span>
            <span class="control" data-role="trigger" data-action="toolbar-delete.mapper">
                <i class="fa fa-times"></i>
            </span>
        </span>
    </div>

    </section>
    <script>
    function changeMenu(info){
        // Remove the active class from current selector
        //\$(info.selector).removeClass('active');
        let strippedSelector = info.selector.substring(0, info.selector.lastIndexOf('>'));
        let sel = strippedSelector.trim();
        \$(sel).removeClass('active');
        //// Add the active class to the new selector
        //\$(info.selector + " > .components").find("div").addClass("active");
        return sel
    }
    function copyOffscreenControl(name) {
        return $("#Offscreen ." + name).first().prop("outerHTML");
    };
    //function toggleDiv(e) {
    //    console.log("Hello World");
    //    let ele = $(e.target).closest(".mapper-pearl").find(".mappable-body").first();
    //    console.log(ele);
    //   if(ele.css("display") == "none"){
    //        ele.css("display", "block");
    //     } else {
    //        ele.css("display", "none");
    //     }
    //}
    </script>
    HTML;

$webpage[] = $head;
$webpage[] = $body;

echo $webpage->render();
