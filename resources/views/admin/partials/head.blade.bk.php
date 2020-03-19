<head>
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 2'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Content-Type" content="text/html" />
	<meta http-equiv="Content-Language" content="{!! app()->getLocale() !!}" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="robots" content="noindex, nofollow" />

    {!! Html::style('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') !!}
    {!! Html::style('vendor/adminlte/dist/css/AdminLTE.min.css') !!}

    @if (config('adminlte.plugins.select2'))
        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css') !!}
    @endif

    @if (config('adminlte.plugins.datatables'))
        {!! Html::style('http://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css') !!}
    @endif

    <!-- IMPRIME O CSS ESPECIFICO DA PAGINA QUE ESTA SENDO EXIBIDA -->
    @yield('adminlte_css')

    {{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
    <!--[if lt IE 9]>
        {!! HTML::script('js/html5shiv.min.js') !!}
        {!! Html::script('js/respond.min.js') !!}
    <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
