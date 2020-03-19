@extends('admin.layouts.main')

@section('css-custom')
    {{-- DEFAULT --}}
    {!! Html::style('css/admin/layouts/form.css') !!}
    {!! Html::style('css/admin/custom.css') !!}
    {{-- CUSTOM PAGES --}}
    @yield('css-page')
@stop

@section('js-custom')
    {{-- JS LIBS --}}
	{!! Html::script('js/libs/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/libs/jquery.validate.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/libs/jquery.validate.message.' . App::getLocale() . '.js', ['defer' => 'defer']) !!}
    {{-- DEFAULT --}}
	{!! Html::script('js/admin/masks.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/admin/script.js', ['defer' => 'defer']) !!}
    {{-- CUSTOM PAGES --}}
    @yield('js-page')
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="clearfix">
                <div class="msg">
                    {!! Form::alertMessages() !!}
                </div>
            </div>
            {{-- FORM --}}
            @yield('box')
        </div>
    </div>

@stop
