$(document).ready(function(){
    $(".order-option").on('click', function(){
        $("#order-options-list table tbody").append("<tr>" + 
        "<td width='40%'>" + $(this).html() +"</td>" +
        "<td width='10%'><input type='number' value='1'/></td>"+
        "<td width='35%'></td>"+
        "<td width='5%'>X</td>"+
        "</tr>")
    });
});