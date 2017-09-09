@extends('dashboard.main')
@section('content')
        <div class="row" ng-controller="WorkflowController as wc">
            <div class="col-md-4" id="new-orders">
                <div class="card mb-3 text-center">
                    <div class="card-block">
                        <p class="card-text">New <a href="#" data-toggle="modal" data-target="#new-order-modal" class="btn btn-sm btn-secondary">+</a></p>
                    </div>
                </div>
                <div class="card mb-2" ng-repeat="openOrder in wc.orderService.orders.open">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal" ng-click="wc.orderService.order = openOrder">@{{ openOrder.customer_first_name + ' ' + openOrder.customer_last_name }}</a>
                    </div>
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-danger cancel-order" ng-click="wc.orderService.orders.delete(openOrder.order_id)">Cancel</a>
                        <a href="#" class="card-link btn btn-sm btn-primary wash-order" ng-click="wc.orderService.orders.newToInProgress(openOrder.order_id)">Wash</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="in-progress-orders">
                <div class="card card-inverse card-primary mb-3 text-center">
                    <div class="card-block">
                        <p class="card-text">In Progress</p>
                    </div>
                </div>
                <div class="card mb-2" ng-repeat="inProgressOrder in wc.orderService.orders.inProgress">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal" ng-click="wc.orderService.order = inProgressOrder">@{{ inProgressOrder.customer_first_name + ' ' + inProgressOrder.customer_last_name }}</a>
                    </div>
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-secondary return-order" ng-click="wc.orderService.orders.inProgressToNew(inProgressOrder.order_id)">Return</a>
                        <a href="#" class="card-link btn btn-sm btn-success ready-order" ng-click="wc.orderService.orders.inProgressToReady(inProgressOrder.order_id)">Ready</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="ready-orders">
                <div class="card card-inverse card-success mb-3 text-center">
                    <div class="card-block">
                        <p class="card-text">Ready</p>
                    </div>
                </div>
                <div class="card mb-2" ng-repeat="readyOrder in wc.orderService.orders.ready">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal" ng-click="wc.orderService.order = readyOrder">@{{ readyOrder.customer_first_name + ' ' + readyOrder.customer_last_name }}</a>
                    </div>
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-secondary return-order" ng-click="wc.orderService.orders.readyToInProgress(readyOrder.order_id)">Return</a>
                        <a href="#" class="card-link btn btn-sm btn-primary claim-order" ng-click="wc.orderService.orders.readyToClaimed(readyOrder.order_id)">Claimed</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            @include('dashboard.modals.workflow-view-order')
            @include('dashboard.modals.create-order')
        </div>
@endsection
@section('scripts')
    <!-- <script src="{{ asset("js/dashboard/workflow/workflow.js")}}"></script> -->
    <script src="{{ asset('js/dashboard/workflow/create-order.js')}}"></script>
    <script src="{{ asset('js/service/ng-service-orders.js')}}"></script>
    <script src="{{ asset('js/dashboard/workflow/ng-controller-workflow.js')}}"></script>
@endsection