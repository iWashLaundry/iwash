@extends('dashboard.main') 
@section('content')
<div ng-controller="WorkflowController as wc">
  <form ng-submit="wc.orderService.orders.create(wc.orderService.order)">
    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h5 ng-show="wc.orderService.order.date_ordered" class="alert alert-success text-center">New order created. <a href="{{ url('/dashboard/workflow') }}">View here.</a></h3>
        </div>
        <div class="col-md-6 col-lg-6" ng-controller="ProductController as pc">
          <h3>New Bag</h3>
          <div class="form-group">
            <div id="order-options-list" class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
                  <thead class="thead-inverse">
                    <tr>
                      <th width="30%" class="text-center">Order Option</th>
                      <th width="35%" class="text-center">Weight</th>
                      <th width="35%" class="text-center">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="product in pc.productService.products.all">
                      <td class='option-name'>@{{ product.name }}</td>
                      <td>
                        <div class="input-group">
                          <input type='number' class="form-control" min="0" ng-model="wc.orderService.order.products[product.product_id]" />
                          <span class="input-group-addon">kg</span>
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon">&#8369</span>
                          <input type='number' class="form-control" min="0" ng-value="product.price * wc.orderService.order.products[product.product_id]" disabled/>
                        </div>
                      </td>
                    </tr>
                    <tr class="table-info">
                      <td class='option-name'>Total</td>
                      <td>
                        <div class="input-group">
                          <input type='number' class="form-control" min="0" ng-value="pc.productService.products.getTotalQuantity(wc.orderService.order.products)" disabled/>
                          <span class="input-group-addon">kg</span>
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon">&#8369</span>
                          <input type='number' class="form-control" min="0" ng-value="pc.productService.products.getTotalPrice(wc.orderService.order.products)" disabled/>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <h3>Customer Details</h3>
          <div class="form-group" ng-controller="CustomerController as cc">
            <input type="text" name="first_name" autocomplete="off" class="form-control" id="customer-first-name" placeholder="First name" ng-model="wc.orderService.order.customer_first_name" ng-change="wc.showDropdown = true">
            <div class="dropdown-menu" id="customer-firstname-dropdown" ng-show="wc.showDropdown" outside-click="wc.showDropdown = false">
              <a class="dropdown-item" href="#" ng-repeat="existingCustomer in cc.customerService.customers.all | filter : wc.orderService.order.customer_first_name" ng-click="wc.orderService.order.fillCustomer(existingCustomer)">@{{ existingCustomer.first_name + ' ' + existingCustomer.last_name }}</a>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="last_name" class="form-control" id="customer-last-name" placeholder="Last name" ng-model="wc.orderService.order.customer_last_name">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="customer-email" placeholder="Email" ng-model="wc.orderService.order.customer_email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" id="customer-phone" placeholder="Phone" ng-model="wc.orderService.order.customer_phone">
          </div>
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection 
@section('scripts')
<script src="{{ asset('js/service/ng-service-products.js') }}"></script>
<script src="{{ asset('js/service/ng-service-orders.js') }}"></script>
<script src="{{ asset('js/service/ng-service-customers.js') }}"></script>
<script src="{{ asset('js/dashboard/inventory/ng-controller-products.js') }}"></script>
<script src="{{ asset('js/dashboard/workflow/ng-controller-workflow.js') }}"></script>
<script src="{{ asset('js/dashboard/customers/ng-controller-customers.js') }}"></script>
@endsection 
@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard/page-home.css') }}" /> @endsection