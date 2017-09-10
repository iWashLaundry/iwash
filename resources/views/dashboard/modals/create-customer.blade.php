                        <!-- Modal -->
                        <div class="modal fade" id="new-customer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form ng-submit="cc.customerService.customers.create(cc.customerService.customer)">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-4 col-form-label">First Name</label>
                                            <div class="col-8">
                                                <input class="form-control" type="text" ng-model="cc.customerService.customer.first_name"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-4 col-form-label">Last Name</label>
                                            <div class="col-8">
                                                <input class="form-control" type="text" ng-model="cc.customerService.customer.last_name"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-4 col-form-label">Email</label>
                                            <div class="col-8">
                                                <input class="form-control" type="email" ng-model="cc.customerService.customer.email"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-4 col-form-label">Phone</label>
                                            <div class="col-8">
                                                <input class="form-control" type="text" ng-model="cc.customerService.customer.phone"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
