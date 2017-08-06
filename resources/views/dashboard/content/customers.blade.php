@extends('dashboard.main')
@section('content')
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" placeholder="Search"/>
                    </div>
                    <div class="card-block">
                        <button class="btn btn-primary form-control" data-toggle="modal" data-target="#myModal">Add</button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-4 col-form-label">Name</label>
                                            <div class="col-8">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-4 col-form-label">Last Name</label>
                                            <div class="col-8">
                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-4 col-form-label">Telephone</label>
                                            <div class="col-8">
                                                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-4 col-form-label">Email</label>
                                            <div class="col-8">
                                                <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-action">
                                Jason Derulo 
                            </a>
                            <a href="#" class="list-group-item list-group-action">
                                Bruce Willis
                            </a>
                            <a href="#" class="list-group-item list-group-action">
                                Pok Wang
                            </a>
                            <a href="#" class="list-group-item list-group-action">
                                Lebron James
                            </a>
                            <a href="#" class="list-group-item list-group-action">
                                Wardell Stephen Curry II
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-block"> 
                        <dl class="row">
                            <dt class="col-sm-3 col-md-3">ID</dt>
                            <dd class="col-sm-3 col-md-9">09999</dd>
                        
                            <dt class="col-sm-3 col-md-3">First Name</dt>
                            <dd class="col-sm-3 col-md-3">Jason</dd>
                                    
                            <dt class="col-sm-3 col-md-3">Last Name</dt>
                            <dd class="col-sm-3 col-md-3">Derulo</dd>
                                    
                            <dt class="col-sm-3 col-md-3">Customer Since</dt>
                            <dd class="col-sm-3 col-md-3">02/02/17</dd>
                            
                            <dt class="col-sm-3 col-md-3">Orders Claimed</dt>
                            <dd class="col-sm-3 col-md-3">2</dd>                                
                            
                            <dt class="col-sm-3 col-md-3">Last Visit</dt>
                            <dd class="col-sm-3 col-md-3">02/05/17</dd>
                            
                            <dt class="col-sm-3 col-md-3">No of Visits</dt>
                            <dd class="col-sm-3 col-md-3">3</dd>                                
                        </dl>
                    </div>
                    <div class="card-block">
                        <dl class="row">        
                            <dt class="col-sm-3 col-md-3">Current Order</dt>
                            <dd class="col-sm-9 col-md-9">09999</dd>

                            <dt class="col-sm-3 col-md-3">Current Order Status</dt>
                            <dd class="col-sm-9 col-md-9">Wash</dd>

                            <dt class="col-sm-3">Current Order Due Date</dt>
                            <dd class="col-sm-9">02/06/17</dd>    
                        </dl>
                    </div>
                </div>
            </div>
        </div>
@endsection