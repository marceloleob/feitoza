@extends('auth.layouts.main')

@section('body')

    <div class="login-box">
        <div class="login-logo">
            <a href="{!! route('home') !!}" target="_blank">
                <img src="{!! asset('images/logo.png') !!}" class="logo" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}" />
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Área Administrativa</p>
            {!! Form::open(['id' => 'form-login', 'route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                <div class="form-group">
                    {!! Form::email('email', old('email'), ['class' => 'form-control email', 'placeholder' => 'E-mail']) !!}
                    {!! Form::notification('email', $errors) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    {!! Form::notification('password', $errors) !!}
                </div>
                <div class="form-group">
                    @csrf
                    {!! Form::button('<i class="fas fa-sign-in-alt"></i> &nbsp; Sign In', ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) !!}
                </div>
            {!! Form::close() !!}
            <div class="auth-links">
                <a href="{!! route('password.request') !!}">Forgot your password?</a>
            </div>
        </div>
    </div>

@stop
