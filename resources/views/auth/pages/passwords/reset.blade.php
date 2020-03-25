@extends('auth.layouts.main')

@section('body')

    <div class="login-box">
        <div class="login-logo">
            <a href="{!! route('home') !!}" target="_blank">
                <img src="{!! asset('images/logo.png') !!}" class="logo" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}" />
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Reset Password</p>
            {!! Form::open(['id' => 'form-reset', 'route' => 'password.update', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                <div class="form-group">
                    {!! Form::email('email', '', ['class' => 'form-control text', 'placeholder' => 'E-mail']) !!}
                    {!! Form::notification('email', $errors) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'New Password']) !!}
                    {!! Form::notification('password', $errors) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => 'Retype password']) !!}
                    {!! Form::notification('password_confirmation', $errors) !!}
                </div>
                <div class="form-group form-button">
                    @csrf
                    {!! Form::hidden('token', $token); !!}
                    {!! Form::button('<i class="fas fa-lock"></i> &nbsp; Reset Password', ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop
