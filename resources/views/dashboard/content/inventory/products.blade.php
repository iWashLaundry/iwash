                <div class="card mb-2" ng-controller="ProductController as pc">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="card-title">Products</h3>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-sm" placeholder="Search" ng-model="pc.products.search" />
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-hover table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="25%">Product</th>
                                    <th width="25%">Price</th>
                                    <th width="15%">Unit</th>
                                    <th width="20%">Updated</th>
                                    <th width="5%"><!--serves as padding--></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="product in pc.productService.products.all | filter : pc.products.search">
                                    <td>@{{ product.product_id }}</td>
                                    <td>
                                        <span ng-if="!product.edit">@{{ product.name }}</span>
                                        <input ng-if="product.edit" type="text" class="form-control form-control-sm" placeholder="Name" ng-model="product.name"/>
                                    </td>
                                    <td>
                                        <span ng-if="!product.edit">&#8369@{{ product.price }}</span>
                                        <div ng-if="product.edit" class="input-group input-group-sm">
                                            <span class="input-group-addon">&#8369</span>
                                            <input type="number" class="form-control form-control-sm " min="0" ng-model="product.price"/>
                                        </div>
                                    </td>
                                    <td ng-controller="UnitController as uc">
                                        <span ng-if="!product.edit">kg</span>
                                        <select ng-if="product.edit" class="form-control form-control-sm">
                                            <option ng-repeat="unit in uc.unitService.units.all" ng-value="unit.uit_id">@{{ unit.symbol }}</option>
                                        </select>
                                    </td>
                                    <td><small>@{{ product.created_at | date : format : "shortDate" }}<small></td>
                                    <td>
                                        <a href="#" ng-if="!product.edit" ng-click="product.edit = true"><span class="fa fa-pencil"></span></a>
                                        <a href="#" ng-if="product.edit" ng-click="pc.productService.products.update(product); product.edit = false" ><span class="fa fa-floppy-o"></span></a>
                                        <a href="#" ng-if="product.edit" ng-click="pc.productService.products.delete(product.product_id)"><span class="fa fa-trash"></span></a>
                                    </td>  
                                </tr>
                                <tr>
                                    <form ng-submit="pc.productService.products.create(pc.productService.product)">
                                    <td colspan="2"><input type="text" class="form-control form-control-sm " placeholder="Name" ng-model="pc.productService.product.name"/></td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">&#8369</span>
                                            <input type="number" class="form-control form-control-sm " min="0"  ng-model="pc.productService.product.price"/>
                                        </div>
                                    </td>
                                    <td ng-controller="UnitController as uc">
                                        <select class="form-control form-control-sm">
                                            <option ng-repeat="unit in uc.unitService.units.all" ng-value="unit.uit_id">@{{ unit.symbol }}</option>
                                        </select>
                                    </td>
                                    <td colspan="2">
                                        <button class="btn btn-primary btn-md" type="submit">Add</button>
                                    </td>  
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>