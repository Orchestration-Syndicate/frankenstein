import { FrankensteinJS } from './frankenstein/frankenstein.js';


addScopeJS(['Frankenstein', 'active', {}]);

// The main entry point for the application
// Any and all javascript functions should be defined in the onReadyHandle function
// Approach is mapped to this wrapper function to allow for the same benefits as document ready
// This is a good place to put any global event handlers, or any other global functions

/**
 * onReadyHandle(element, selector, markup)
 * A function to give AJAX induced DOM mutations the same benefits as document ready
 *
 * Sometimes plugins have special delta functions separate from initialization -- in those
 * cases you will want to specialize this function with that updater function and leave init in the normal
 * document ready.
 *
 * @var element The element being altered
 * @var selector The selector (a query selector or a function) describing which DOM elements to alter
 * @markup the resulting payload of an Intent call. Usually HTML markup, could technically be JSON, raw text, etc
 *
 */
let onReadyHandle = function(element, selector, markup) {
    // this sets up any .Interface found inside the block changed by server responses
    // including doc ready
    $(element)
        .find('.Interface')
        .each(function(_, Markup) {
            let api = '/server.php';
            // Check if Markup has data-api attribute
            if ($(Markup).attr('data-api')) api = $(Markup).attr('data-api');

            Markup.Interface = new Interface({ Markup: Markup, api: api });
        });

    // account for when the element itself is the Interface
    // well it came from the copy paste 
    // no need of this
    if ($(element).hasClass('Interface')) {
        let api = '/service/api.json';
        if ($(element).attr('data-api')) api = $(element).attr('data-api');
        element.Interface = new Interface({ Markup: element, api: api });
    }

    $(element)
        .find('#menuButton')
        .click(function(e) {
            e.stopPropagation();
            $('.breadcrumbs').slideToggle();
            $(this).toggleClass('collapsed');
        });
    $(element)
        .find('.backBtn')
        .click(function(e) {
            if ($('li.active').parent('ul').parent('li').length > 0) {
                $('li.active')
                    .parent('ul')
                    .parent('li')
                    .children('.visual')
                    .trigger('click');
            }
        });

    let x = {};
    //if ($(element).hasClass('FrankensteinUI')) {
        x = FrankensteinJS();
    //}
};

$(document).ready(function() {
    Interface.prototype.RefreshComplete = onReadyHandle;
    onReadyHandle(document, null, null);
});
