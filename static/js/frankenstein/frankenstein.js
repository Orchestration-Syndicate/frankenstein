import { Displacer } from '../approach/approach.displace.js';
import { Inflate } from '../approach/approach.inflate.js';

addScopeJS(['Frankenstein', 'main'], {});
addScopeJS(['Frankenstein', 'active'], {});

Frankenstein.main = function(config = {}) {
    let $elf = {};

    $elf.config = {
        mapper: {
            main: '.ApproachMapper',
            source: '#LeftPanel > .Oyster > .Toolbar li',
            dest: '#RightPanel > .Oyster',
        },
        displace: {
            source: '#LeftPanel > .Oyster > .Toolbar .active > li[aspect-field]',
            dest: '#RightPanel > .Oyster > .Toolbar li > .visual',
            how: {
                handle: '.visual',
                remain_in_source: true,
            },
        },
    };
    $elf.managed = {
        displacer: null,
    };
    overwriteDefaults(config, $elf.config);

    $elf.init = function() {
        let config = $elf.config;

        $elf.managed.inflater = new Inflate({
            toggle_effect: 'slide',
            toggle_speed: 800,
            toggle_direction: 'up',
        });

        console.log("Initializing Displacer");

        $elf.managed.displacer = new Displacer({
            what: config.displace.source,
            where: config.displace.dest,
            how: {
                handle: config.displace.handle,
                remain_in_source: config.displace.how.remain_in_source,
                emit: 'composed-append.mapper',
            },
        });

        $elf.managed.displacer.call.complete = function(e, ref) {
            let dest = ref.state.preview[0];
            if (dest == null) {
                console.log('state what is empty', ref);
            }
            let $dest = $(dest);
            let field_name = $dest.text();
            let field_attributes = JSON.parse($dest.attr('aspect-field'));
            console.log(field_name, field_attributes);

            let $new_pearl = $(copyOffscreenControl('mapper-field'));
            console.log($new_pearl);
            $new_pearl.find('.visual label').first().text(field_name);
            $new_pearl.find('.visual').first().attr('aspect-field', JSON.stringify(field_attributes));
            $new_pearl.find('.visual').first().attr('aspect-name', field_name);

            $('#RightPanel > .Oyster > .Toolbar').append($new_pearl);
        };

        $(config.mapper.source).on('load.stuff', function(e) {
            console.log('Loaded stuff');
        });

        $(config.mapper.main).on('load-tag.mapper', function(e) {
            dispatch.load_tag(e, config.mapper);
        });
        $(config.mapper.main).on('source-change.mapper', function(e) {
            dispatch.source_change(e, config.mapper);
        });
        $(config.mapper.main).on('auto-match.mapper', function(e) {
            dispatch.auto_match(e, config.mapper);
        });
        $(config.mapper.main).on('bound-toggle.mapper', function(e) {
            dispatch.bound_toggle(e, config.mapper);
        });
        $(config.mapper.main).on('empty-toggle.mapper', function(e) {
            dispatch.empty_toggle(e, config.mapper);
        });
        $(config.mapper.main).on('save.mapper', function(e) {
            dispatch.save(e, config.mapper);
        });
        $(config.mapper.dest).on('new-setting.mapper', function(e) {
            dispatch.new_setting(e, config.mapper.dest);
        });
        $(config.mapper.dest).on('composed-append.mapper', function(e) {
            dispatch.composed_append(e, config.displace.dest);
        });
        $(config.mapper.dest).on('composed-up.mapper', function(e) {
            dispatch.composed_up(e, config.composed);
        });
        $(config.mapper.dest).on('composed-down.mapper', function(e) {
            dispatch.composed_down(e, config.composed);
        });
        $(config.mapper.dest).on('composed-delete.mapper', function(e) {
            dispatch.composed_delete(e, config.composed);
        });
        $(config.mapper.dest).on('clipboard-copy.mapper', function(e) {
            dispatch.clipboard_copy(e, config.mapper.dest);
        });
        $(config.mapper.dest).on('toolbar-enable.mapper', function(e) {
            dispatch.toolbar_enable(e, config.toolbar);
        });
        $(config.toolbar).on('toolbar-up.mapper', function(e) {
            dispatch.toolbar_up(e, config.toolbar);
        });
        $(config.toolbar).on('toolbar-down.mapper', function(e) {
            dispatch.toolbar_down(e, config.toolbar);
        });
        $(config.toolbar).on('toolbar-append.mapper', function(e) {
            dispatch.toolbar_append(e, config.toolbar);
        });
        $(config.toolbar).on('toolbar-delete.mapper', function(e) {
            dispatch.toolbar_delete(e, config.toolbar);
        });
        // handled by inflate //$( config.expand_setting ).on("expand-setting.mapper", function(e) { dispatch.expand_setting(e, config); });
    };

    let dispatch = {
        load_tag: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        source_change: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        auto_match: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        bound_toggle: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        empty_toggle: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        save: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        composed_up: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("Okay got some composed_up stuff");
            let target = $(e.target).closest("div.mapper-field").prev("div.mapper-field");
            // find the li element closest to the target
            let curr = $(e.target).closest("div.mapper-field");
            // remove target from dom
            target.remove();
            // insert target after curr
            curr.after(target);
            console.log(target, curr);
        },
        composed_down: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("Okay got some composed_down stuff");
            let next = $(e.target).closest("div.mapper-field").next("div.mapper-field");
            // find the li element closest to the target
            let target = $(e.target).closest("div.mapper-field");
            // remove target from dom
            next.after(target);
            console.log(target, next);
        },
        composed_append: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log('Moved stuff');
        },
        composed_delete: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        toolbar_enable: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("The toolbar is enabled TIMMY!", e.target);
            let icon_picker = copyOffscreenControl('icon-picker');

            $(e.target).append(icon_picker);
        },
        clipboard_copy: function(e, host_selector) {
            console.log("We are in the clipboard TIMMY!", e.target);
            let $target = $(e.target);
            let icon = $target.find('.icon').first().clone();
            let label = $target.find('.label').first().clone();
            let copy = $('<div>').addClass('toolbar-icon').append(icon).append(label);

            // search if there is already a toolbar-icon in the toolbar
            // if so, remove it
            let existing = $(e.target).parent().parent().prev('.toolbar-icon');
            if (existing.length > 0) {
                existing.remove();
            }
            $(e.target).parent().parent().before(copy);
        },
        toolbar_up: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        toolbar_down: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        toolbar_append: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        toolbar_delete: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        new_setting: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            let new_pearl = copyOffscreenControl('mapper-pearl');
            let input = $('.addProp').val();
            let body = copyOffscreenControl('mappable-body');

            let $pearl = $(new_pearl);
            $pearl.find('.visual label').first().text(input);
            $pearl.find('.visual').first().append(body).prop('outerHTML');
            let div = $('<div>').addClass('fields').addClass('controls').prop('outerHTML');
            $pearl.find('.visual').first().append(div).prop('outerHTML');

            $('#RightPanel > .Oyster > .Toolbar').append($pearl);
        },
        expand_setting: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
    };

    $elf.init();
    console.log('Finished.');
    return $elf;
};

export let FrankensteinJS = Frankenstein.main;
