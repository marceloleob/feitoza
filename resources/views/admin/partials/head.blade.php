<head>
    <meta charset="UTF-8" />
    {{-- RESPONSIVE TAG --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin - @yield('title')</title>

    {{-- METAS TAG --}}
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="{!! config('constants.DEVELOPER_NAME') . ' <' . config('constants.DEVELOPER_EMAIL') . '>' !!}" />
    <meta name="copyright" content="{!! config('constants.COMPANY_NAME') !!}" />
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    <meta name="robots" content="noindex, nofollow" />

    {{-- ICO --}}
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" />
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />

    {{-- RESET CSS --}}
    {!! Html::style('css/reset.css') !!}
    {{-- CSS LIBS --}}
    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('vendor/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('vendor/ionicons/css/ionicons.min.css') !!}
    {{-- <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> --}}
    {!! Html::style('vendor/adminlte/dist/css/adminlte.min.css') !!}
    {!! Html::style('vendor/adminlte/dist/css/skins/skin-blue.css') !!}
    {{-- FONTS --}}
    {!! Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') !!}
    {{-- CSS CUSTOM --}}
    {!! Html::style('css/admin/main.css') !!}
    {!! Html::style('css/forms.css') !!}
    @yield('css-custom')

{{-- <style type="text/css">
    .jqstooltip {
        position: absolute;
        left: 0px;
        top: 0px;
        visibility: hidden;
        background: rgb(0, 0, 0) transparent;
        background-color: rgba(0, 0, 0, 0.6);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        color: white;
        font: 10px arial, san serif;
        text-align: left;
        white-space: nowrap;
        padding: 5px;
        border: 1px solid white;
        box-sizing: content-box;
        z-index: 10000;
    }

    .jqsfield {
        color: white;
        font: 10px arial, san serif;
        text-align: left;
    }
</style> --}}

</head>
