@extends('admin.layouts.main')

@section('title-page-lg', Lang::get('messages.welcome.admin.title'))

@section('title-page-sm', '')

@section('css-custom')
    {{-- CUSTOM PAGES --}}
    {!! Html::style('css/admin/pages/dashboard.css') !!}
@stop

@section('content')

    <div class="row clearfix">
        <div class="welcome-box">
            <div class="welcome-text">
                <h1>{!! Lang::get('messages.welcome.admin') !!}</h1>
            </div>
        </div>
    </div>

@stop
