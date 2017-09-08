@extends('dashboard.main')
@section('content')
        <div class="mt-2">
            <div class="row">
                <div class="col-md-6">
                    @include("dashboard.content.inventory.products")
                </div>
                <div class="col-md-6">
                    @include("dashboard.content.inventory.miscellaneous")
                </div>
            </div>
        </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/service/ng-service-products.js')}}"></script>
    <script src="{{ asset('js/dashboard/inventory/ng-controller-products.js')}}"></script>
@endsection