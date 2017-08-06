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
        $("#new-orders").append('<div class="card mb-2">'
                +'<div class="card-header">'
                +'    <a href="#" data-toggle="modal" data-target="#order-modal">Customer Name</a>'
                +'</div>'
                +'<div class="card-block">'
                +'    <a href="#" class="card-link btn btn-sm btn-danger">Remove</a>'
                +'    <a href="#" class="card-link btn btn-sm btn-primary">Wash</a>'
                +'</div>'
                +'<div class="card-footer">'
                +'    <small class="text-muted">Last updated 3 mins ago</small>'
                +'</div>'
            +'</div>');
    });
});