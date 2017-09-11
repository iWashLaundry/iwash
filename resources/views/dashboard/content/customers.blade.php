@extends('dashboard.main')
@section('content')
        <div class="row" ng-controller="CustomerController as cc">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" placeholder="Search" ng-model="cc.customers.search"/>
                    </div>
                    <div class="card-block">
                        <button class="btn btn-primary form-control" data-toggle="modal" data-target="#new-customer-modal">Add</button>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-action" ng-repeat="existingCustomer in cc.customerService.customers.all | filter : cc.customers.search" ng-click="cc.customerService.customer = existingCustomer">
                                @{{ existingCustomer.first_name + ' ' + existingCustomer.last_name }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8" ng-show="cc.customerService.customer.first_name">
                <div class="card mt-3">
                    <div class="card-block"> 
                        <dl class="row">
                            <dt class="col-sm-3 col-md-3">Customer ID</dt>
                            <dd class="col-sm-3 col-md-9">@{{ cc.customerService.customer.customer_id }}</dd>
                        
                            <dt class="col-sm-3 col-md-3">First Name</dt>
                            <dd class="col-sm-3 col-md-3">@{{ cc.customerService.customer.first_name }}</dd>
                                    
                            <dt class="col-sm-3 col-md-3">Last Name</dt>
                            <dd class="col-sm-3 col-md-3">@{{ cc.customerService.customer.last_name }}</dd>
                                    
                            <dt class="col-sm-3 col-md-3">Customer Since</dt>
                            <dd class="col-sm-3 col-md-3">@{{ cc.customerService.customer.created_at }}</dd>
                            
                            <dt class="col-sm-3 col-md-3">Orders Claimed</dt>
                            <dd class="col-sm-3 col-md-3">@{{ cc.customerService.customer.orders_claimed }}</dd>                                
                            
                            <dt class="col-sm-3 col-md-3">No of Visits</dt>
                            <dd class="col-sm-3 col-md-3">@{{ cc.customerService.customer.visits }}</dd>                                
                        </dl>
                    </div>
                    <div class="card-block">
                        <dl class="row">        
                            <dt class="col-sm-3 col-md-3">Current Order</dt>
                            <dd class="col-sm-9 col-md-9">@{{ cc.customerService.customer.current_order.order_id }}</dd>
                            
                            <dt class="col-sm-3">Current Order Due Date</dt>
                            <dd class="col-sm-9">@{{ cc.customerService.customer.current_order.date_to_claim }}</dd>    
                        </dl>
                    </div>
                </div>
            </div>
            @include('dashboard.modals.create-customer')
        </div>
@endsection
@section('scripts')
    <script src="{{ asset("js/service/ng-service-customers.js") }}"></script>
    <script src="{{ asset("js/dashboard/customers/ng-controller-customers.js") }}"></script>
@endsection