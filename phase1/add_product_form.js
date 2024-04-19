$(document).ready(function() {
$("#add_product_form").submit( event => {
    
    let isValid = true;
        const code = $("#code").val();
        if (!code) {
            $("#code").next().text("This field should not be blank.");
            isValid = false;
        } else if (code.length < 4) {
            $("#code").next().text("Must be at least 4 characters.");
            isValid = false;
        } else if (code.length > 10) {
            $("#code").next().text("Cannot exceed more than 10 characters.");
            isValid = false;
        } else {
            $("#code").next().text("");
        }

        const name = $("#name").val();
        if (!name) {
            $("#name").next().text("This field should not be blank.");
            isValid = false;
        } else if (name.length < 10) {
            $("#name").next().text("Must be at least 10 characters.");
            isValid = false;
        } else if (name.length > 100) {
            $("#name").next().text("Cannot exceed more than 100 characters.");
            isValid = false;
        } else {
            $("#name").next().text("");
        }

        const description = $("#description").val();
        if (!description) {
            $("#description").next().text("This field should not be blank.");
            isValid = false;
        } else if (description.length < 10 ) {
            $("#description").next().text("Must be at least 10 characters.");
            isValid = false;

        }else if ( description.length > 255) {
            $("#description").next().text("This field should not exceed 255 characters.");
            isValid = false;
        } else {
            $("#description").next().text("");
        }

        const price = parseFloat($("#price").val());
        if (!price) {
            $("#price").next().text("This field should not be blank.");
            isValid = false;
        } else if (price <= 0) {
            $("#price").next().text("This field should not be negative or zero.");
            isValid = false;
        } else if (price > 100000) {
            $("#price").next().text("This field should not exceed $100,000.");
            isValid = false;
        } else {
            $("#price").next().text("");
        }

        const colorTheme = $("#colorTheme").val();
        
        
         console.log ();
        if (isValid == false) {
            console.log ();
            event.preventDefault();
        }
    
    });
});