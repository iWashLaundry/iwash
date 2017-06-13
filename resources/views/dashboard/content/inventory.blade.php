@extends('dashboard.main')
@section('content')
        <div>
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" placeholder="Search"/>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-hover table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Item #</th>
                                    <th>Inventory Item</th>
                                    <th>Number of Items</th>
                                    <th>Unit of Measurement</th>
                                    <th>Expense Amount</th>
                                    <th>Stock Last Check</th>
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
                                                <input class="form-control form-control-sm col" type="date" value="2011-08-19" id="date-input">
                                            </div>
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
                                                <input class="form-control form-control-sm col" type="date" value="2011-08-19" id="date-input">
                                            </div>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection