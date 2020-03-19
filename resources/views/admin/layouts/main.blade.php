@extends('adminlte::master')

@section('title')
    Admin - @yield('title-page-lg')
@stop

@section('adminlte_css')
    {!! Html::style('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css') !!}
    {{-- CSS CUSTOM --}}
    {!! Html::style('css/admin/adminlte.css') !!}
    @yield('css-custom')
@stop

@section('body_class', 'skin-' . config('adminlte.skin') . ' sidebar-mini') {{-- "layout-boxed" ou "fixed" ou "layout-top-nav" E "sidebar-collapse" --}}

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
            @include('admin.partials.header')
        <!-- End Main Header -->

        <!-- Menu -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
            </section>
        </aside>
        <!-- End Menu -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1> @yield('title-page-lg') </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        </div>
        <!-- End Content Wrapper -->

    </div>
@stop

@section('adminlte_js')
    {!! Html::script('vendor/adminlte/dist/js/adminlte.min.js') !!}

    {{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
    <!--[if lt IE 9]>
        {!! HTML::script('js/html5shiv.min.js') !!}
        {!! Html::script('js/respond.min.js') !!}
    <![endif]-->

    {{-- JS FORMS --}}
    @yield('js-custom')
@stop
