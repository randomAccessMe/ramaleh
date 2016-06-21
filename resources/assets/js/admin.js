function deleteInstance(instanceElement, instanceName) {
    if($('.' + instanceName + '-form-fields').length <= 1) {
        alert('This is the last ' + instanceName.capitalizeFirstLetter() + '!');
        return;
    }
    instanceElement.parents('.' + instanceName + '-form-fields').remove();
}

String.prototype.capitalizeFirstLetter = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

function freshDuplicate(element, elementName, Callback) {

    element.data('iterator', element.data('iterator') + 1);
    var iteration = element.data('iterator');
    var clone = $('.' + elementName + '-form-fields').first().clone();
    clone.find('input, textarea').each(function () {
        var fieldName = $(this).attr('name');
        $(this).val(null).attr({
            name: fieldName.replace(/[a-z]{3}\[\d\]/i, 'new['+iteration+']')
        });
    });
    Callback(clone);
    clone.find('.delete-' + elementName + '').removeAttr('href')
    clone.appendTo('#form-container');
}