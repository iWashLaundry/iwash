                <div class="card mb-2" ng-controller="ItemController as ic">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="card-title">Miscellaneous</h3>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-sm" placeholder="Search" ng-model="ic.items.search"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-hover table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="30%">Item</th>
                                    <th width="30%">Price</th>
                                    <th width="20%">Unit</th>
                                    <th width="5%">Quantity</th>
                                    <th width="10%"><!--serves as padding--></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in ic.itemService.items.all | filter : ic.items.search">
                                    <td>@{{ item.item_id }}</td>
                                    <td>
                                      <span ng-if="!item.edit">@{{ item.name }}</span>
                                      <input ng-if="item.edit" type="text" class="form-control form-control-sm" placeholder="Name" ng-model="item.name"/>
                                    </td>
                                    <td>
                                        <span ng-if="!item.edit">&#8369@{{ item.price }}</span>
                                        <div ng-if="item.edit" class="input-group input-group-sm">
                                            <span class="input-group-addon">&#8369</span>
                                            <input type="number" class="form-control form-control-sm " min="0" ng-value="item.price" ng-model="item.price"/>
                                       </div>
                                    </td>
                                    <td ng-controller="UnitController as uc">
                                        <span ng-if="!item.edit">kg</span>
                                        <select ng-if="item.edit" class="form-control form-control-sm">
                                            <option ng-repeat="unit in uc.unitService.units.all" ng-value="unit.unit_id">@{{ unit.symbol }}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <span ng-if="!item.edit">100</span>
                                        <input ng-if="item.edit" type="number" class="form-control form-control-sm " min="0"/>
                                    </td>
                                    <td>
                                        <a href="#" ng-if="!item.edit" ng-click="item.edit = true"><span class="fa fa-pencil"></span></a>
                                        <a href="#" ng-if="item.edit" ng-click="ic.itemService.items.update(item); item.edit = false" ><span class="fa fa-floppy-o"></span></a>
                                        <a href="#" ng-if="item.edit" ng-click="ic.itemService.items.delete(item.item_id)"><span class="fa fa-trash"></span></a>
                                    </td>  
                                </tr>
                                <tr>
                                    <form ng-submit="ic.itemService.items.create(ic.itemService.item)">
                                    <td colspan="2">
                                        <input type="text" class="form-control form-control-sm" placeholder="Name" ng-model="ic.itemService.item.name"/>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">&#8369</span>
                                            <input type="number" class="form-control form-control-sm" min="0" ng-model="ic.itemService.item.price"/>
                                        </div>                                                
                                    </td>
                                    <td ng-controller="UnitController as uc">
                                        <select class="form-control form-control-sm">
                                            <option ng-repeat="unit in uc.unitService.units.all" ng-value="unit.uit_id">@{{ unit.symbol }}</option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control form-control-sm " min="0"/></td>
                                    <td>
                                        <button class="btn btn-primary" type="submit">Add</button>
                                    </td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>