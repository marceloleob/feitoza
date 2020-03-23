@extends('auth.layouts.main')

@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{!! url(config('adminlte.dashboard_url', 'home')) !!}" target="_blank">
                <img src="{!! asset('images/logo.png') !!}" class="logo" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}" />
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">{!! trans('adminlte::adminlte.login_message') !!}</p>
            {!! Form::open(['id' => 'contact-form', 'route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                <div class="form-group">
                    {!! Form::email('email', old('email'), ['class' => 'form-control email', 'placeholder' => 'E-mail']) !!}
                    {!! Form::notification('email', $errors) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('password', '', ['class' => 'form-control text', 'placeholder' => 'Password']) !!}
                    {!! Form::notification('password', $errors) !!}
                </div>
                <div class="form-group">
                    @csrf
                    {!! Form::button('<i class="fas fa-sign-in-alt"></i> Sign In', ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
