@extends('dashboard.main')
@section('content')
        <div class="row">
            <div class="col-md-4" id="new-orders">
                <div class="card mb-3 text-center">
                    <div class="card-block">
                        <p class="card-text">New <a href="#" data-toggle="modal" data-target="#new-order-modal" class="btn btn-sm btn-secondary">+</a></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal">Customer Name</a>
                    </div>
                    <!-- Start Order Details Modal -->
                    <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Customer Name</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <dl class="row">
                                        <dt class="col-sm-7">ID</dt>
                                        <dd class="col-sm-5 text-right">09999</dd>

                                        <dt class="col-sm-7">Weight</dt>
                                        <dd class="col-sm-5 text-right">3kg</dd>
                                        
                                        <dt class="col-sm-7">Whites</dt>
                                        <dd class="col-sm-5 text-right">5</dd>
                                        
                                        <dt class="col-sm-7">Colored</dt>
                                        <dd class="col-sm-5 text-right">2</dd>
                                    
                                        <dt class="col-sm-7">Due Date</dt>
                                        <dd class="col-sm-5 text-right">02/02/17</dd>

                                        <dt class="col-sm-7">Amount</dt>
                                        <dd class="col-sm-5 text-right">P90.00</dd>

                                        <dt class="col-sm-7">Status</dt>
                                        <dd class="col-sm-5 text-right">Paid</dd>
                                    </dl>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger remove-order">Cancel Order</button>
                                    <button type="button" class="btn btn-primary wash-order">Wash</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end item details modal -->
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-danger cancel-order">Cancel</a>
                        <a href="#" class="card-link btn btn-sm btn-primary wash-order">Wash</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="in-progress-orders">
                <div class="card card-inverse card-primary mb-3 text-center">
                    <div class="card-block">
                        <p class="card-text">In Progress</p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal">Customer Name</a>
                    </div>
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-secondary return-order">Return</a>
                        <a href="#" class="card-link btn btn-sm btn-success ready-order">Ready</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="ready-orders">
                <div class="card card-inverse card-success mb-3 text-center">
                    <div class="card-block">
                        <p class="card-text">Ready</p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal">Customer Name</a>
                    </div>
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-secondary return-order">Return</a>
                        <a href="#" class="card-link btn btn-sm btn-primary claim-order">Claimed</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#order-modal">Customer Name</a>
                    </div>
                    <div class="card-block">
                        <a href="#" class="card-link btn btn-sm btn-secondary return-order">Return</a>
                        <a href="#" class="card-link btn btn-sm btn-primary claim-order">Claimed</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.modals.create-order')
@endsection
@section('scripts')
    <script src="{{ asset("js/dashboard/workflow/create-order.js")}}"></script>
    <script src="{{ asset("js/dashboard/workflow/workflow.js")}}"></script>
@endsection