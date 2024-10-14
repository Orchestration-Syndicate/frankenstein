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
        toolbar: [],
        composed: [],
    };
    overwriteDefaults(config, $elf.config);

    $elf.refresh = function() {
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
            let $caller = $(ref.state.target[0]).closest('li');
            // add bound class on $dest
            $caller.addClass('mapped-source');
            console.log('The dest is:', $caller);
            let field_name = $dest.text();
            let field_attributes = JSON.parse($dest.attr('aspect-field'));
            console.log(field_name, field_attributes);
            let $new_pearl = $(copyOffscreenControl('mapper-field'));
            $new_pearl.find('.visual label').first().text(field_name);
            $new_pearl.find('.visual').first().attr('aspect-field', JSON.stringify(field_attributes));
            $new_pearl.find('.visual').first().attr('aspect-name', field_name);

            // add .mapped class to $new_pearl
            $new_pearl.addClass('mapped');
            console.log('The new pearl is:', $new_pearl);
            $elf.managed.composed.push({ 'field': field_attributes, 'name': field_name });

            let input = $(e.target).closest('.mapper-pearl').find('input[name="composed"]').first();
            input.val(JSON.stringify($elf.managed.composed));

            console.log('The input is:', input);

            $('#RightPanel > .Oyster > .Toolbar').append($new_pearl);
        };
    }

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
            let $caller = $(ref.state.target[0]).closest('li');
            // add bound class on $dest
            $caller.addClass('mapped-source');
            console.log('The dest is:', $caller);
            let field_name = $dest.text();
            let field_attributes = JSON.parse($dest.attr('aspect-field'));
            console.log(field_name, field_attributes);

            let $new_pearl = $(copyOffscreenControl('mapper-field'));
            $new_pearl.find('.visual label').first().text(field_name);
            $new_pearl.find('.visual').first().attr('aspect-field', JSON.stringify(field_attributes));
            $new_pearl.find('.visual').first().attr('aspect-name', field_name);

            // add .mapped class to $new_pearl
            $new_pearl.addClass('mapped');

            $elf.managed.composed.push({ 'field': field_attributes, 'name': field_name });

            let input = $(e.target).closest('.mapper-pearl').find('input[name="composed"]').first();
            input.val(JSON.stringify($elf.managed.composed));

            console.log('The input is:', input);

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
        $('#LeftPanel').on('auto-match.mapper', function(e) {
            dispatch.auto_match(e, config.mapper);
        });
        $('#LeftPanel').on('bound-toggle.mapper', function(e) {
            dispatch.bound_toggle(e, config.mapper);
        });
        $(config.mapper.main).on('empty-toggle.mapper', function(e) {
            dispatch.empty_toggle(e, config.mapper);
        });
        $(config.mapper.main).on('save.mapper', function(e) {
            dispatch.save(e, config.mapper);
        });
        // $(config.mapper.dest).on('new-setting.mapper', function(e) {
        //     dispatch.new_setting(e, config.mapper.dest);
        // });
        //TODO: Don't hardcode the overlay
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
        $(config.mapper.dest).on('toolbar-enable.mapper', function(e) {
            dispatch.toolbar_enable(e, config.toolbar);
        });
        $(config.mapper.dest).on('toolbar-up.mapper', function(e) {
            dispatch.toolbar_up(e, config.toolbar);
            console.log("From the toolbar-up")
        });
        $(config.mapper.dest).on('toolbar-down.mapper', function(e) {
            dispatch.toolbar_down(e, config.toolbar);
        });
        $("#Overlay > #IconPicker").on('toolbar-append.mapper', function(e) {
            dispatch.toolbar_append(e, config.toolbar);
        });
        $(config.mapper.dest).on('toolbar-delete.mapper', function(e) {
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
            // get all of the .mapper-field elements
            let $fields = $('#LeftPanel').find('li[aspect-field]');
            let $settings = $('#RightPanel').find('.mapper-pearl');
            let arr = [];

            // find the setting whose levenstein distance is the smallest and add the field to the array
            $fields.each(function(_, field) {
                let field_name = $(field).text();
                $settings.each(function(_, setting) {
                    let setting_name = $(setting).find('.visual label').first().text();
                    console.log(typeof Levenshtein);
                    let distance = Levenshtein.get(field_name, setting_name);
                    arr.push({ 'field': field, 'setting': setting, 'distance': distance });
                }
                );
            });

            console.log(arr);
        },
        bound_toggle: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            // TODO: Change this to be from $elf.config
            let $selector = $("#LeftPanel");
            console.log($selector);
            $selector.toggleClass("bound");
            $("#RightPanel").toggleClass("bound");
            if ($selector.hasClass("bound")) {
                $(e.target).text("Show Bound");
            } else {
                $(e.target).text("Hide Bound");
            }
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
            // console.log('Moved stuff');
        },
        composed_delete: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        toolbar_enable: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("The toolbar is enabled TIMMY!", e.target);
            //let icon_picker = copyOffscreenControl('icon-picker');

            //$(e.target).append(icon_picker);
            let left = e.target.clientWidth;
            let top = e.target.clientHeight;
            console.log(e);

            // set position of #IconPicker to left and top
            $('#IconPicker').css('left', left + 'px');
            $('#IconPicker').css('top', top + 'px');
            $('#IconPicker').css('display', 'block');
        },
        toolbar_up: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("Okay got some toolbar_up stuff");
            let target = $(e.target).closest("div.toolbar-icon").prev("div.toolbar-icon");
            let curr = $(e.target).closest("div.toolbar-icon");
            target.remove();
            curr.after(target);
        },
        toolbar_down: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("Okay got some toolbar_down stuff");
            let next = $(e.target).closest("div.toolbar-icon").next("div.toolbar-icon");
            let target = $(e.target).closest("div.toolbar-icon");
            next.after(target);
            console.log(target, next);
        },
        toolbar_append: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            console.log("We are in the clipboard TIMMY!", e.target);
            let $target = $(e.target);
            let icon = $target.find('.icon').first().clone();
            let label = $target.find('.label').first().clone();
            let copy = copyOffscreenControl('toolbar-icon');
            let $copy = $(copy).clone();
            // remove any existing icon and label
            $copy.find('.icon').remove();
            $copy.find('.label').remove();
            $copy.find(".visual").first().before(icon).before(label);
            // get class name of icon and push to toolbar
            let icon_class = icon.attr('class').split(' ')[2];
            $elf.managed.toolbar.push({ 'icon': icon_class, 'label': label.text() });
            console.log($elf.managed.toolbar);
            // get input in .toolbar
            let $input = $('.toolbar').find('input').first();
            $input.val(JSON.stringify($elf.managed.toolbar));
            $(".toolbar").append($copy);
        },
        toolbar_delete: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
            let $target = $(e.target).closest('div.toolbar-icon');
            //remove the target from the dom
            // get label of target and remove from toolbar
            let label = $target.find('.label').first().text();
            $elf.managed.toolbar = $elf.managed.toolbar.filter(function(item) {
                return item.label !== label;
            });
            let $input = $('.toolbar').find('input').first();
            $input.val(JSON.stringify($elf.managed.toolbar));
            $target.remove();
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
