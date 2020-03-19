@extends('admin.layouts.form')

@section('title-page-lg', Lang::get('bestway.admin.pictures.form.title'))

@section('title-page-sm', Lang::get('bestway.admin.pictures.form.subtitle'))

@section('css-page')
    {!! Html::style('css/admin/pages/pictures-form.css') !!}
@stop

@section('js-page')
    {!! Html::script('js/admin/pages/pictures-form.js', ['defer' => 'defer']) !!}
@stop

@section('box')

    {!! Form::open(['id' => 'picture-form', 'route' => 'gallery.picture.store', 'method' => 'POST', 'role' => 'form', 'class' => 'form', 'files' => true]) !!}
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group col-sm-8">
                    {!! Form::label('service_id', Lang::get('bestway.admin.pictures.form.label.service'), ['class' => 'control-label']) !!}
                    {!! Form::select('service_id', $optionsservices, (!empty($currentservices) ? $currentservices : ''), ['class' => 'form-control']) !!}
                    {!! Form::errorBackend('service_id', $errors) !!}
                </div>
                @if (empty($data))
                    <div class="form-group col-sm-8">
                        {!! Form::label('photo', Lang::get('bestway.admin.pictures.form.label.picture'), ['class' => 'control-label']) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            {!! Form::file('photo', ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::errorBackend('photo', $errors) !!}
                    </div>
                @else
                    <div class="form-group col-sm-8">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::label('photo', Lang::get('bestway.admin.pictures.form.label.picture'), ['class' => 'control-label']) !!}
                                <div class="inner-box">
                                    <img src="{!! asset(config('constants.PICTURES_PATH') . $data->friendly . '/' . $data->photo) !!}" class="edit-picture" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::label('photo', Lang::get('bestway.admin.pictures.form.label.new-picture'), ['class' => 'control-label']) !!}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                                </div>
                                {!! Form::errorBackend('photo', $errors) !!}
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="form-group col-sm-8">
                        {!! Form::label('showhome', Lang::get('html.field.label.showhome'), ['class' => 'control-label']) !!}
                        <div class="radios">
                            <label class="radio-inline">
                                {!! Form::radio('showhome', '1', ((isset($data) && $data->showhome == 1) ? true : false)) !!} {!! Lang::get('html.field.showhome.active') !!}
                            </label>
                        </div>
                        <div class="radios">
                            <label class="radio-inline">
                                {!! Form::radio('showhome', '0', ((!isset($data)) ? true : ($data->showhome == 0) ? true : false)) !!} {!! Lang::get('html.field.showhome.inactive') !!}
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-sm-8">
                        {!! Form::label('status', Lang::get('html.field.label.status'), ['class' => 'control-label']) !!}
                        <div class="radios">
                            <label class="radio-inline">
                                {!! Form::radio('status', '1', ((!isset($data)) ? true : ($data->status == 1) ? true : false)) !!} {!! Lang::get('html.field.status.active') !!}
                            </label>
                        </div>
                        <div class="radios">
                            <label class="radio-inline">
                                {!! Form::radio('status', '0', ((isset($data) && $data->status == 0) ? true : false)) !!} {!! Lang::get('html.field.status.inactive') !!}
                            </label>
                        </div>
                    </div>
                    --}}
                @endif
            </div>
            <div class="box-footer">
                <a href="{!! route('gallery.services') !!}" class="btn bg-blue margin"><i class="fa fa-arrow-left"></i>{!! Lang::get('html.btn.back') !!}</a>
                @if (isset($data))
                    {!! Form::hidden('id', $data->id) !!}
                    <a href="{!! route('gallery.picture.destroy', [$data->service_id, $data->id]) !!}" class="btn btn-danger"><i class="fa fa-times-circle"></i>{!! Lang::get('html.btn.delete') !!}</a>
                @endif
                {!! Form::hidden('currentservices', $currentservices) !!}
                {!! Form::button('<i class="fa fa-save"></i> ' . Lang::get('html.btn.save'), ['type' => 'submit', 'class' => 'btn btn-success margin']) !!}
            </div>
        </div>
    {!! Form::close() !!}


    @if (!empty($album) && count($album) != 0)
        <div class="box box-primary gallery">
            <div class="box-body">
                <div class="row clearfix">
                    <div class="gallery-title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4>{!! Lang::get('bestway.admin.pictures.form.pictures.by.service', ['service' => $album[0]->name]) !!}</h4>
                    </div>
                    @foreach ($album as $value)
                        <div class="gallery-item all col-lg-3 col-md-3 col-sm-6 col-xs-12" style="display: inline-block;">
                                <div class="star {!! ($value->showhome == 0) ? 'hidden' : '' !!}"><span class="icon fa fa-star"></span></div>
                                <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{!! asset(config('constants.PICTURES_PATH') . $value->friendly . '/' . $value->photo) !!}" class="{!! strtolower($value->position) !!}-picture" alt="">
                                    <!-- Overlay Box -->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="{!! route('gallery.picture.edit', [$value->service_id, $value->id]) !!}" class="link-btn"><span class="icon fa fa-edit edit"></span></a>
                                                <a href="{!! route('gallery.picture.showhome', [$value->service_id, $value->id, (($value->showhome) ? '0' : '1')]) !!}" class="link-btn"><span class="icon fa fa-star update-{!! ($value->showhome == 0) ? 'blue' : 'red' !!}"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Overlay Box -->
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        @if (!empty($currentservices))
            <div class="box box-primary gallery">
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="no-pictures-found">{!! Lang::get('bestway.admin.pictures.form.no.pictures.found') !!}</div>
                    </div>
                </div>
            </div>
        @endif
    @endif

@stop
