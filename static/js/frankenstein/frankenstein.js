import { Displacer } from "../approach/approach.displace.js";
import { Inflate } from "../approach/approach.inflate.js";

addScopeJS(["Frankenstein", "main"], {});
addScopeJS(["Frankenstein", "active"], {});

Frankenstein.main = function(config = {}) {
    let $elf = {};

    $elf.config = {
        mapper: {
            main: ".ApproachMapper",
            source: "#LeftPanel > .Oyster > .Toolbar li",
            dest: "#RightPanel",
        },
        displace: {
            source: "#LeftPanel > .Oyster > .Toolbar .active > li",
            dest: "#RightPanel > .Oyster > .Toolbar > li[data-perl]",
            how: {
                handle: ".visual",
                remain_in_source: true
            },
        },
    };
    $elf.managed = {
        displacer: null,
    };
    overwriteDefaults(config, $elf.config);

    $elf.init = function() {
        console.log("Inited");
        let config = $elf.config;

        $elf.managed.inflater = new Inflate({
            listen_target: $elf.config.displace.source,
            toggle_effect: "slide",
            toggle_speed: 800,
            toggle_direction: "up",
        });

        $elf.managed.displacer = new Displacer({
            what: config.displace.source,
            where: config.displace.dest,
            how: {
                handle: config.displace.handle,
                remain_in_source: config.displace.how.remain_in_source
            },
        });

        console.log($(config.mapper.source));


        $(config.mapper.source).on("load.stuff", function(e) {
            console.log("Loaded stuff");
        });

        $(config.mapper.main).on("load-tag.mapper", function(e) {
            dispatch.load_tag(e, config.mapper);
        });
        $(config.mapper.main).on("source-change.mapper", function(e) {
            dispatch.source_change(e, config.mapper);
        });
        $(config.mapper.main).on("auto-match.mapper", function(e) {
            dispatch.auto_match(e, config.mapper);
        });
        $(config.mapper.main).on("bound-toggle.mapper", function(e) {
            dispatch.bound_toggle(e, config.mapper);
        });
        $(config.mapper.main).on("empty-toggle.mapper", function(e) {
            dispatch.empty_toggle(e, config.mapper);
        });
        $(config.mapper.main).on("save.mapper", function(e) {
            dispatch.save(e, config.mapper);
        });
        $(config.mapper.dest).on("new-setting.mapper", function(e) {
            dispatch.new_setting(e, config.mapper.dest);
        });
        $(config.displace.dest).on("composed-append.mapper", function(e) {
            dispatch.composed_append(e, config.displace.dest);
        });
        $(config.composed).on("composed-up.mapper", function(e) {
            dispatch.composed_up(e, config.composed);
        });
        $(config.composed).on("composed-down.mapper", function(e) {
            dispatch.composed_down(e, config.composed);
        });
        $(config.composed).on("composed-delete.mapper", function(e) {
            dispatch.composed_delete(e, config.composed);
        });
        $(config.toolbar).on("toolbar-enable.mapper", function(e) {
            dispatch.toolbar_enable(e, config.toolbar);
        });
        $(config.toolbar).on("toolbar-up.mapper", function(e) {
            dispatch.toolbar_up(e, config.toolbar);
        });
        $(config.toolbar).on("toolbar-down.mapper", function(e) {
            dispatch.toolbar_down(e, config.toolbar);
        });
        $(config.toolbar).on("toolbar-append.mapper", function(e) {
            dispatch.toolbar_append(e, config.toolbar);
        });
        $(config.toolbar).on("toolbar-delete.mapper", function(e) {
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
        },
        composed_down: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        composed_append: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        composed_delete: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
        toolbar_enable: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
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
        },
        expand_setting: function(e, host_selector) {
            let host_container = $(e.target).closest(host_selector);
        },
    };

    $elf.init();
    console.log("Finished.");
    return $elf;
};

export let FrankensteinJS = Frankenstein.main;
