@extends('dashboard.main')
@section('content')
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 collapse" id="collapseEdit1">
                    <dl class="row">
                        <dt class="col-sm-4">Company Name</dt>
                        <dd class="col-sm-8">iWash Laundry Services</dd>

                        <dt class="col-sm-4">Username</dt>
                        <dd class="col-sm-8">iWash</dd>
                        
                        <dt class="col-sm-4">Phone Number</dt>
                        <dd class="col-sm-8">09223146758</dd>

                        <dt class="col-sm-4">email address</dt>
                        <dd class="col-sm-8">iwashlaundry@gmail.com</dd>
                    </dl>
                    <button type="button" class="btn btn-primary" data-toggle="collapse"  data-target="#collapseEdit" aria-expanded="false" aria-controls="collapseEdit">Edit</button>
                </div>
                <div class="col-md-6 collapse" id="collapseEdit">
                    <div class="card card-block">
                        <form>
                            <div class="form-group row">
                                <label for="inputCompanyName" class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputCompanyName" placeholder="iwash Laundry Services">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputUsername" placeholder="iwash">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone number</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="inputPhoneNumber" placeholder="09223146758">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Your Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="iwash@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                 <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" >Submit</button>
                                 </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection