<!DOCTYPE html>
<html>

@include('auth.partials.head')

<body class="hold-transition @yield('body_class')">

@yield('body')

    <script src="{!! asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') !!}"></script>
    <script src="{!! asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    @if(config('adminlte.plugins.select2'))
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    @endif

    @if(config('adminlte.plugins.datatables'))
        <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
    @endif

    @if(config('adminlte.plugins.chartjs'))
        <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
    @endif

    @yield('adminlte_js')

</body>
</html>
