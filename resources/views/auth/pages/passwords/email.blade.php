@extends('auth.layouts.main')

@section('body')

    <div class="login-box">
        <div class="login-logo">
            <a href="{!! route('home') !!}" target="_blank">
                <img src="{!! asset('images/logo.png') !!}" class="logo" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}" />
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Forgot Password</p>
            @if (session('status'))
                <div class="alert alert-success">
                    {!! session('status') !!}
                </div>
            @endif
            {!! Form::open(['id' => 'form-email', 'route' => 'password.email', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                <div class="form-group">
                    {!! Form::email('email', old('email'), ['class' => 'form-control email', 'placeholder' => 'E-mail']) !!}
                    {!! Form::notification('email', $errors) !!}
                </div>
                <div class="form-group">
                    @csrf
                    {!! Form::button('<i class="fas fa-envelope-open-text"></i> &nbsp; Send Password Reset Link', ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) !!}
                </div>
            {!! Form::close() !!}
            <div class="auth-links">
                <a href="{!! route('login') !!}">Voltar</a>
            </div>
        </div>
    </div>

@stop
