<div class="modal fade" id="new-order-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="new-order-form" ng-submit="wc.orderService.orders.create(wc.orderService.order)">
        <div class="modal-header">
          <h5 class="modal-title">New Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group" ng-controller="CustomerController as cc">
            <input type="text" name="first_name" class="form-control" id="customer-first-name" placeholder="First name" ng-model="wc.orderService.order.customer_first_name" ng-change="wc.showDropdown = true">
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
          <div class="form-group" ng-controller="ProductController as pc">
            <div id="order-options-list" class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
                  <thead class="thead-inverse">
                    <tr>
                      <th width="40%">Order Option</th>
                      <th width="30%">Quantity</th>
                      <th width="30%">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="product in pc.productService.products.all">
                      <td>@{{ product.name }}</td>
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
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      <form>
    </div>
  </div>
</div>