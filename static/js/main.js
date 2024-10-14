import { FrankensteinJS } from './frankenstein/frankenstein.js';

addScopeJS(['Frankenstein', 'active', {}]);

let FrankensteinInstance = {};

let onReadyHandle = function(element, selector, markup) {
    // this sets up any .Interface found inside the block changed by server responses
    // including doc ready
    let closest_interface_container = $(element).closest(".Interface")
        .addBack('.Interface');
    console.log("Closest Interface", closest_interface_container);
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
    FrankensteinInstance.refresh();
};

$(document).ready(function() {
    FrankensteinInstance = new FrankensteinJS({});
    Interface.prototype.RefreshComplete = onReadyHandle;
    onReadyHandle(document, null, null);

    // Accordion functionality for Toolbar
    const toolbar = document.querySelector('.Toolbar');

    // Function to add a new toolbar item
    function addToolbarItem(title, content) {
        const toolbarItem = document.createElement('li');
        toolbarItem.classList.add('toolbar-item');

        const toolbarHeader = document.createElement('div');
        toolbarHeader.classList.add('toolbar-header');
        toolbarHeader.textContent = title;

        const toolbarContent = document.createElement('div');
        toolbarContent.classList.add('toolbar-content');
        toolbarContent.innerHTML = `
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
        `;

        toolbarItem.appendChild(toolbarHeader);
        toolbarItem.appendChild(toolbarContent);
        toolbar.appendChild(toolbarItem);

        // Add click event listener to the header
        toolbarHeader.addEventListener('click', function() {
            const isActive = toolbarItem.classList.contains('active');

            // Close all open toolbars
            document.querySelectorAll('.toolbar-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.toolbar-content').style.display = 'none';
            });

            // Toggle the clicked toolbar
            if (!isActive) {
                toolbarItem.classList.add('active');
                toolbarContent.style.display = 'block';
            }
        });
    }

    // Add event listener to the "Add" button to dynamically add new toolbar items
    document.querySelector('button[data-action="new-setting.mapper"]').addEventListener('click', function() {
        const name = document.querySelector('input[name="addProp"]').value || 'New Toolbar';
        addToolbarItem(name, '');
    });
});