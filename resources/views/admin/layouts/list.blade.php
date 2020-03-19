@extends('admin.layouts.main')

@section('css-custom')
    {{-- DEFAULT --}}
    {!! Html::style('css/admin/layouts/list.css') !!}
    {!! Html::style('css/admin/custom.css') !!}
@stop

@section('js-custom')
    {{-- DEFAULT --}}
    {!! Html::script('js/admin/script.js', ['defer' => 'defer']) !!}
@stop

@section('content')

    <div class="clearfix">
        <div class="msg">
            {!! Form::alertMessages() !!}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>
                    <span class="info-page"><i class="fa fa-info-circle"></i> @yield('title-page-sm') </span>
                    <span class="btn-new">
                        @yield('button-add')
                    </span>
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                @yield('box')
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td class="text-center">
                    {!! $paginate !!}
                    <span class="btn-new">
                        @yield('button-add')
                    </span>
                </td>
            </tr>
        </table>
    </div>

@stop
