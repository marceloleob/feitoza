@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('css-custom')
    {!! Html::style('css/admin/pages/dashboard.css') !!}
@stop

@section('content')

    <div class="row clearfix">
        <div class="welcome-box">
            <div class="welcome-text">
                <h1>Aqui ficam as coisas da Dashboard</h1>
            </div>
        </div>
    </div>

@stop
