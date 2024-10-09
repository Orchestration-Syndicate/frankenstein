import { FrankensteinJS } from './frankenstein/frankenstein.js';

addScopeJS(['Frankenstein', 'active', {}]);

let onReadyHandle = function(element, selector, markup) {
    // this sets up any .Interface found inside the block changed by server responses
    // including doc ready
    let closest_interface_container = $(element).find(".Interface")
        .addBack('.Interface');
    //console.log(closest_interface_container);
    if (closest_interface_container.length > 0) {
        let closest_interface = closest_interface_container[0].Interface;
        if (closest_interface !== undefined && closest_interface.length > 0) {
            closest_interface.Controls.rebind();
        }
    }
    $(element)
        .findExclude('.Interface', '.Interface, .InterfaceContent')
        .each(function(_, Markup) {
            let api = '/server.php';
            // Check if Markup has data-api attribute
            if ($(Markup).attr('data-api')) api = $(Markup).attr('data-api');

            if (Markup.hasOwnProperty('Interface')) {
                Markup.Interface.rebind();
            } else {
                Markup.Interface = new Interface({ Markup: Markup, api: api });
            }
        });

    // Update other plugins here if needed
};

let FrankensteinInstance = {};

$(document).ready(function() {
    FrankensteinInstance = new FrankensteinJS({

    });
    Interface.prototype.RefreshComplete = onReadyHandle;
    onReadyHandle(document, null, null);
});
