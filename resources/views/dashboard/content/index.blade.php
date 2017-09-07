@extends('dashboard.main')
@section('content')
    <div ng-controller="WorkflowController as wc">
        <form ng-submit="wc.orders.create(wc.order)">
            <div class="container mt-2"> 
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h5 ng-show="wc.order.date_ordered" class="alert alert-success text-center">New order created. <a href="{{ url('/dashboard/workflow') }}">View here.</a></h3> 
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
                                            <tr ng-repeat="product in pc.products.all"> 
                                                <td class='option-name'>@{{ product.name }}</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type='number' class="form-control" value='0' min="0" ng-model="wc.order.products[product.product_id]"/>
                                                        <span class="input-group-addon">kg</span>    
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">&#8369</span>    
                                                        <input type='number' class="form-control" value='0' min="0" disabled/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-info"> 
                                                <td class='option-name'>Total</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type='number' class="form-control" value='0' min="0" disabled/>
                                                        <span class="input-group-addon">kg</span>    
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">&#8369</span>    
                                                        <input type='number' class="form-control" value='0' min="0" disabled/>
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
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" id="customer-first-name" placeholder="First name" ng-model="wc.order.customer_first_name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" id="customer-last-name" placeholder="Last name" ng-model="wc.order.customer_last_name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="customer-email" placeholder="Email" ng-model="wc.order.customer_email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="customer-phone" placeholder="Phone" ng-model="wc.order.customer_phone">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/dashboard/inventory/ng-controller-products.js')}}"></script>
    <script src="{{ asset('js/dashboard/workflow/ng-controller-workflow.js')}}"></script>
@endsection