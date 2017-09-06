                <div class="card mb-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="card-title">Products</h3>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-sm" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-hover table-responsive text-center">
                            <thead class="thead-inverse">
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="30%">Product</th>
                                    <th width="30%">Price</th>
                                    <th width="15%">Units</th>
                                    <th width="15%">Updated</th>
                                    <th width="5%"><!--serves as padding--></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="product in controller.products.all">
                                    <td>1</td>
                                    <td>@{{ product.name }}</td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">&#8369</span>
                                            <input type="number" class="form-control form-control-sm " min="0" ng-model="product.price"/>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" id="select-unit-of-measurement">
                                            <option>kg</option>
                                            <option>lbs</option>
                                            <option>pcs</option>
                                            <option>cups</option>
                                            <option>tbsp</option>
                                            <option>tsp</option>
                                        </select>
                                    </td>
                                    <td>@{{ product.created_at | date : format : "shortDate" }}</td>
                                    <td>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="controller.products.delete(product.product_id)">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </td>  
                                </tr>
                                <tr>
                                    <form ng-submit="controller.products.create(controller.product)">
                                    <td></td>
                                    <td><input type="text" class="form-control form-control-sm " placeholder="Name" ng-model="controller.product.name"/></td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">&#8369</span>
                                            <input type="number" class="form-control form-control-sm " min="0"  ng-model="controller.product.price"/>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" id="select-unit-of-measurement">
                                            <option>kg</option>
                                            <option>lbs</option>
                                            <option>pcs</option>
                                            <option>cups</option>
                                            <option>tbsp</option>
                                            <option>tsp</option>
                                        </select>
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" type="submit">Add</button>
                                    </td>  
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="float-right btn-group mr-1">
                            <button class="btn btn-primary" type="button">Save</button>
                            <button class="btn btn-primary" type="button">Edit</button>
                            <button class="btn btn-default" type="button">Reset</button>
                        </div>
                    </div>
                </div>