$(document).ready(function(){
    $("#new-orders").on('click', ".wash-order", function(){
        var customerName = $(this).parents(".card").find(".card-header a").text();
        add_in_progress(customerName);
        $(this).parents(".card").remove();
    });

    $("#in-progress-orders").on('click', ".ready-order", function(){
        var customerName = $(this).parents(".card").find(".card-header a").text();
        add_ready(customerName);
        $(this).parents(".card").remove();
    });

    $("#ready-orders").on('click', ".claim-order", function(){
        $(this).parents(".card").remove();
    });

    //removing orders from workflow slots
    $("#new-orders").on('click', ".cancel-order", function(){
        $(this).parents(".card").remove();
    });

    $("#in-progress-orders").on('click', ".return-order", function(){
        var customerName = $(this).parents(".card").find(".card-header a").text();
        add_new_order(customerName);
        $(this).parents(".card").remove();
    });

    $("#ready-orders").on('click', ".return-order", function(){
        var customerName = $(this).parents(".card").find(".card-header a").text();
        add_in_progress(customerName);
        $(this).parents(".card").remove();
    });
});

function add_new_order(customerName){
    var html = '<div class="card mb-2">'
                +'<div class="card-header">'
                +'    <a href="#" data-toggle="modal" data-target="#order-modal">'
                + customerName
                +'    </a>'
                +'</div>'
                +'<div class="card-block">'
                +'    <a href="#" class="card-link btn btn-sm btn-danger cancel-order">Cancel</a>'
                +'    <a href="#" class="card-link btn btn-sm btn-primary wash-order">Wash</a>'
                +'</div>'
                +'<div class="card-footer">'
                +'    <small class="text-muted">Last updated 3 mins ago</small>'
                +'</div>'
            +'</div>';

    $("#new-orders").append(html);
        
}

function add_in_progress(customerName){
    var html = '<div class="card mb-2">'
                +'<div class="card-header">'
                +'    <a href="#" data-toggle="modal" data-target="#order-modal">'
                + customerName
                +'    </a>'
                +'</div>'
                +'<div class="card-block">'
                +'    <a href="#" class="card-link btn btn-sm btn-secondary return-order">Return</a>'
                +'    <a href="#" class="card-link btn btn-sm btn-success ready-order">Ready</a>'
                +'</div>'
                +'<div class="card-footer">'
                +'    <small class="text-muted">Last updated 3 mins ago</small>'
                +'</div>'
            +'</div>';

    $("#in-progress-orders").append(html);
}

function add_ready(customerName){
    var html = '<div class="card mb-2">'
                +'<div class="card-header">'
                +'    <a href="#" data-toggle="modal" data-target="#order-modal">'
                +customerName
                +'    </a>'
                +'</div>'
                +'<div class="card-block">'
                +'    <a href="#" class="card-link btn btn-sm btn-secondary return-order">Return</a>'
                +'    <a href="#" class="card-link btn btn-sm btn-primary claim-order">Claimed</a>'
                +'</div>'
                +'<div class="card-footer">'
                +'    <small class="text-muted">Last updated 3 mins ago</small>'
                +'</div>'
            +'</div>';

    $("#ready-orders").append(html);
}