                    <!-- Start Order Details Modal -->
                    <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">@{{ wc.orderService.order.customer_first_name + ' ' + wc.orderService.order.customer_last_name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <dl class="row">
                                        <dt class="col-sm-7">ID</dt>
                                        <dd class="col-sm-5 text-right">@{{ wc.orderService.order.order_id }}</dd>

                                        <dt class="col-sm-7">Email</dt>
                                        <dd class="col-sm-5 text-right">@{{ wc.orderService.order.customer_email }}</dd>

                                        <dt class="col-sm-7">Phone Number</dt>
                                        <dd class="col-sm-5 text-right">@{{ wc.orderService.order.customer_phone }}</dd>
                                        
                                        <dt class="col-sm-7">Due Date</dt>
                                        <dd class="col-sm-5 text-right">02/02/17</dd>
                                    </dl>
                                    <table class="table">
                                        <thead class="thead-default">
                                            <tr>
                                                <th width="50%">Product</th>
                                                <th width="25%">Price</th>
                                                <th width="25%">Weight</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="product in wc.orderService.order.products">
                                                <td>@{{ product.name }}</td>
                                                <td>&#8369@{{ product.price }}</td>
                                                <td>@{{ product.quantity }}</td>
                                            </tr>
                                            <tr class="table-info">
                                                <td><strong>Total</strong></td>
                                                <td>&#8369@{{ wc.orderService.getTotalPrice(wc.orderService.order.products) }}</td>
                                                <td>@{{ wc.orderService.getTotalQuantity(wc.orderService.order.products) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger remove-order">Cancel Order</button>
                                    <button type="button" class="btn btn-primary wash-order">Wash</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end item details modal -->
