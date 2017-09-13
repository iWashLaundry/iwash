                <div class="card mb-2" ng-controller="UnitController as uc">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="card-title">Units</h3>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-sm" placeholder="Search" ng-model="uc.unitService.units.search" />
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-hover table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="45%">Unit</th>
                                    <th width="45%">Symbol</th>
                                    <th width="5%"><!--serves as padding--></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="inventoryUnit in uc.unitService.units.all | filter : uc.unitService.units.search">
                                    <td>@{{ inventoryUnit.unit_id }}</td>
                                    <td>@{{ inventoryUnit.name }}</td>
                                    <td>@{{ inventoryUnit.symbol }}</td>
                                    <td>
                                        <button type="button" class="close" ng-click="uc.unitService.units.delete(inventoryUnit.unit_id)">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </td>  
                                </tr>
                                <tr>
                                    <form ng-submit="uc.unitService.units.create(uc.unitService.unit)">
                                    <td colspan="2"><input type="text" class="form-control form-control-sm " placeholder="Name" ng-model="uc.unitService.unit.name"/></td>
                                    <td><input type="text" class="form-control form-control-sm " placeholder="Symbol" ng-model="uc.unitService.unit.symbol"/></td>
                                    <td colspan="2">
                                        <button class="btn btn-primary btn-md" type="submit">Add</button>
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