function chooseFacility(hasKitchen) {
    var output = '<label style="font-weight:bold" for="facility">Facility: </label>';
    output += '<select id="facility" onchange="">';
    output += '<option disabled selected>Please Choose</option>';
    output += '<option value="palliative">Palliative</option>';
    output += '<option value="childrens_unit">Childrens Unit</option>';
    output += '<option value="surgical_unit">Surgical Unit</option>';
    if (hasKitchen) { output += '<option value="kitchen">Kitchen</option>'; }
    output += '</select><br/><br/>'; 
    return output;
}

function populateSelect(start, end, incrementBy) {
    for (var i=start; i<=end; i+=incrementBy) {
        document.write("<option value=" + i + ">" + i + "</option>\n");
    }
}


