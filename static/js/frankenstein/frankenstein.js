addScopeJS(['Frankenstein', 'main'], {});
addScopeJS(['Frankenstein', 'active'], {});

Frankenstein.main = function(config = {}) {

    function init() {
        $($elf.config.mapper).on("load-tag.mapper", function(e) { dispatch.load_tag(e, $elf.config.mapper); });
        $($elf.config.mapper).on("source-change.mapper", function(e) { dispatch.source_change(e, $elf.config.mapper); });
        $($elf.config.mapper).on("auto-match.mapper", function(e) { dispatch.auto_match(e, $elf.config.mapper); });
        $($elf.config.mapper).on("bound-toggle.mapper", function(e) { dispatch.bound_toggle(e, $elf.config.mapper); });
        $($elf.config.mapper).on("empty-toggle.mapper", function(e) { dispatch.empty_toggle(e, $elf.config.mapper); });
        $($elf.config.mapper).on("save.mapper", function(e) { dispatch.save(e, $elf.config.mapper); });
        $($elf.config.mapper).on("composed-up.mapper", function(e) { dispatch.composed_up(e, $elf.config.mapper); });
        $($elf.config.mapper).on("composed-down.mapper", function(e) { dispatch.composed_down(e, $elf.config.mapper); });
        $($elf.config.mapper).on("composed-append.mapper", function(e) { dispatch.composed_append(e, $elf.config.mapper); });
        $($elf.config.mapper).on("composed-delete.mapper", function(e) { dispatch.composed_delete(e, $elf.config.mapper); });
        $($elf.config.mapper).on("toolbar-enable.mapper", function(e) { dispatch.toolbar_enable(e, $elf.config.mapper); });
        $($elf.config.mapper).on("toolbar-up.mapper", function(e) { dispatch.toolbar_up(e, $elf.config.mapper); });
        $($elf.config.mapper).on("toolbar-down.mapper", function(e) { dispatch.toolbar_down(e, $elf.config.mapper); });
        $($elf.config.mapper).on("toolbar-append.mapper", function(e) { dispatch.toolbar_append(e, $elf.config.mapper); });
        $($elf.config.mapper).on("toolbar-delete.mapper", function(e) { dispatch.toolbar_delete(e, $elf.config.mapper); });
        $($elf.config.mapper).on("new-setting.mapper", function(e) { dispatch.new_setting(e, $elf.config.mapper); });
        $($elf.config.mapper).on("expand-setting.mapper", function(e) { dispatch.expand_setting(e, $elf.config.mapper); });
    }

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
};
