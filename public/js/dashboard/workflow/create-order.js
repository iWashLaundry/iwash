$(document).ready(function(){
    //add options from dropdown menu to order form
    $(".add-order-option-dropdown").on('click', '.order-option', function(){
        $("#order-options-list table tbody").append("<tr>" + 
        "<td width='40%' class='option-name'>" + $(this).html() +"</td>" +
        "<td width='10%'><input type='number' value='1'/></td>"+
        "<td width='35%'></td>"+
        "<td width='5%'><a href='#' class='btn btn-sm btn-danger remove-option'>X</a></td>"+
        "</tr>");

       $(this).remove();
    });

    //removes option form order form and places it back to dropdown menu
    $('#order-options-list').on('click', 'table td .remove-option', function(){
        var option_name = $(this).parents('tr').children('td.option-name').html();
        $('.add-order-option-dropdown').append('<a href="#" class="dropdown-item order-option" href="#">' + option_name + '</a>');
        $(this).parents('tr').remove();
    });

    //adds new order to the workflows
    $("#new-order-form").on('submit', function(e){
        e.preventDefault();
        var customerName = $("#customer-first-name").val() + " " + $("#customer-last-name").val();
        add_new_order(customerName);
        $("#new-order-modal").modal("hide");
    });
});

