@extends('dashboard.main')
@section('content')
        <<div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add item in Inventory</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Invetory Item</label>
                            <div class="col-8">
                                <input class="form-control" type="text" value="Fabric Conditiner" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-4 col-form-label">Number of Items</label>
                            <div class="col-8">
                                <select class="form-control 1-100" type="multiple"></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-4 col-form-label">Unit of Measurement</label>
                            <div class="col-8">
                                <select multiple class="form-control" id="select-unit-of-measurement">
                                    <option>pounds</option>
                                    <option>kilograms</option>
                                    <option>pieces</option>
                                    <option>cups</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-4 col-form-label">Price</label>
                            <div class="col-8">
                                <div class="form-group form-inline row" style="min-width:130px;">
                                    <label for="currency-label" class="col-2"><span>&#8369</span></label>
                                    <select class="col-9 form-control 1-100"></select>                                          
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-4 col-form-label">Stock Last Checked</label>
                            <div class="col-8">
                                <input class="form-control" type="date" value="2017-01-01" id="example-date-input">
                            </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                            <input type="text" class="col form-control" placeholder="Search"/>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-hover table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Item #</th>
                                    <th>Inventory Item</th>
                                    <th>Number of Items</th>
                                    <th>Unit of Measurement</th>
                                    <th>Price</th>
                                    <th>Stock Last Checked</th>
                                    <th><!--serves as padding--></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>Detergent</th>
                                    <th><select class="form-control form-control-sm 1-100"></select></th>
                                    <th>
                                        <div class="form-group">
                                            <select class="form-control form-control-sm" id="select-unit-of-measurement">
                                            <option>pounds</option>
                                            <option>kilograms</option>
                                            <option>pieces</option>
                                            <option>cups</option>
                                            </select>
                                        </div>
                                    </th>
                                    <th>
                                            <div class="form-group form-inline row" style="min-width:130px;">
                                                    <label for="currency-label" class="col-1"><span>&#8369</span></label>
                                                    <select class="form-control form-control-sm col-6 1-100"></select>                                          
                                            </div>
                                    </th>
                                    <th>                                           
                                            <div class="col-md-12">
                                                <input class="form-control form-control-sm col" type="date" value="2017-01-01" id="date-input">
                                            </div>
                                    </th>
                                    <th>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </th>  
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>Plastic</th>
                                    <th><select class="form-control form-control-sm 1-100"></select></th>
                                    <th>
                                        <div class="form-group">
                                            <select class="form-control form-control-sm" id="select-unit-of-measurement">
                                            <option>pounds</option>
                                            <option>kilograms</option>
                                            <option>pieces</option>
                                            <option>cups</option>
                                            </select>
                                        </div>
                                    </th>
                                    <th>
                                            <div class="form-group form-inline row" style="min-width:130px;">
                                                    <label for="currency-label" class="col-1"><span>&#8369</span></label>
                                                    <select class="form-control form-control-sm col-6 1-100"></select>                                          
                                            </div>
                                    </th>
                                    <th>                                           
                                            <div class="col-md-12">
                                                <input class="form-control form-control-sm col" type="date" value="2017-01-01" id="date-input">
                                            </div>
                                    </th>
                                    <th>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </th>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header ">
                        <div class="row float-right ">
                            <button class="mr-5 btn btn-primary" data-toggle="modal" data-target="#myModal"type="submit">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection