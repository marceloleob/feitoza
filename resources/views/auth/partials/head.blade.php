<head>
    <meta charset="UTF-8" />
    {{-- RESPONSIVE TAG --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{!! Config::get('app.name') !!}</title>

    {{-- METAS TAG --}}
    <meta name="robots" content="noindex, nofollow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="{!! config('constants.DEVELOPER_NAME') . ' <' . config('constants.DEVELOPER_EMAIL') . '>' !!}" />
    <meta name="copyright" content="{!! config('constants.COMPANY_NAME') !!}" />
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    <meta name="robots" content="index, follow" />

    {{-- ICO --}}
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" />
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />

    {{-- RESET CSS --}}
    {!! Html::style('css/reset.css') !!}
    {{-- CSS LIBS --}}
    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('vendor/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('vendor/flaticon/all.css') !!}
    {{-- {!! Html::style('vendor/ionicons.min.css') !!} --}}
    {!! Html::style('vendor/adminlte/dist/css/adminlte.min.css') !!}
    {{-- CSS CUSTOM --}}
    {!! Html::style('css/auth/main.css') !!}
    {!! Html::style('css/forms.css') !!}
    @yield('css-custom')
</head>
