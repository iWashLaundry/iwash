<!DOCTYPE html>
<html>
<head>
    @include('dashboard.components.header.head')
</head>
<body ng-app="iWashDashboard">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input type="hidden" name="base_url" id="base-url" value="{{ url('/') }}" />
    <!-- header.html -->
    @include('dashboard.components.header.header')
    <!-- main.html -->
    <main>
        @yield('content')
    </main>
    <!-- footer.html -->
    @include('dashboard.components.footer.footer')
</body>
</html>