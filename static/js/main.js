import { FrankensteinJS } from './frankenstein/frankenstein.js';


addScopeJS(['Frankenstein', 'active', {}]);


let onReadyHandle = function(element, selector, markup) {
    // this sets up any .Interface found inside the block changed by server responses
    // including doc ready
    $(element)
        .find('.Interface')
        .addBack(".Interface")
        .each(function(_, Markup) {
            let api = '/server.php';
            // Check if Markup has data-api attribute
            if ($(Markup).attr('data-api')) api = $(Markup).attr('data-api');

            if (Markup.hasOwnProperty("Interface")) {
                Markup.Interface.rebind();
            } else {
                Markup.Interface = new Interface({ Markup: Markup, api: api });
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
