@extends('dashboard.main')
@section('content')
        <form>
            <div class="container mt-2"> 
                <div class="row">           
                    <div class="col-md-6 col-lg-6">
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
                                            <tr> 
                                                <td class='option-name'>Whites</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type='number' class="form-control" value='0' min="0"/>
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
                                            <tr> 
                                                <td class='option-name'>Colored</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type='number' class="form-control" value='0' min="0"/>
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
                                            <tr> 
                                                <td class='option-name'>Comforter</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type='number' class="form-control" value='0' min="0"/>
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
                                            <tr> 
                                                <td class='option-name'>Barong</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type='number' class="form-control" value='0' min="0"/>
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
                            <input type="text" name="first_name" class="form-control" id="customer-first-name" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" id="customer-last-name" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="customer-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="customer-phone" placeholder="Phone">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </div>
        </form>
@endsection