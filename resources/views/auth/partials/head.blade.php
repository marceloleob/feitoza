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

    <link rel="stylesheet" href="{!! asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('vendor/adminlte/dist/css/AdminLTE.min.css') !!}" />

    @if(config('adminlte.plugins.select2'))
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" />
    @endif

    @if(config('adminlte.plugins.datatables'))
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css" />
    @endif

    <!-- IMPRIME O CSS ESPECIFICO DA PAGINA QUE ESTA SENDO EXIBIDA -->
    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito" />
</head>
