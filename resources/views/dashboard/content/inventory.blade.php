@extends('dashboard.main')
@section('content')
        <div>
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" placeholder="Search"/>
                    </div>
                    <div class="card-block">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-action justify-content-between">
                                Detergent
                                <span class="badge badge-default badge-pill">14</span>
                            </a>
                            <a href="#" class="list-group-item list-group-action justify-content-between">
                                Fabric Conditioner
                                <span class="badge badge-default badge-pill">12</span>
                            </a>
                            <a href="#" class="list-group-item list-group-action justify-content-between">
                                Bleach
                                <span class="badge badge-default badge-pill">14</span>
                            </a>
                            <a href="#" class="list-group-item list-group-action justify-content-between">
                                Plastic Bags
                                <span class="badge badge-default badge-pill">14</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection