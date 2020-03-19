@extends('admin.layouts.form')

@section('title-page-lg', Lang::get('bestway.admin.testimonials.form.title'))

@section('title-page-sm', Lang::get('bestway.admin.testimonials.form.subtitle'))

@section('js-page')
    {!! Html::script('js/admin/pages/testimonials-form.js', ['defer' => 'defer']) !!}
@stop

@section('box')

    {!! Form::open(['id' => 'testimonial-form', 'route' => 'testimonial.store', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group col-sm-8">
                    {!! Form::label('name', Lang::get('bestway.admin.testimonials.form.label.name'), ['class' => 'control-label']) !!}
                    {!! Form::text('name', (!empty($data->name) ? $data->name : null), ['class' => 'form-control', 'placeholder' => Lang::get('bestway.admin.testimonials.form.placeholder.name'), 'maxlength' => '100']) !!}
                    {!! Form::errorBackend('name', $errors) !!}
                </div>
                <div class="form-group col-sm-8">
                    {!! Form::label('text', Lang::get('bestway.admin.testimonials.form.label.text'), ['class' => 'control-label']) !!}
                    {!! Form::textarea('text', (!empty($data->text) ? $data->text : null), ['class' => 'form-control', 'placeholder' => Lang::get('bestway.admin.testimonials.form.placeholder.text')]) !!}
                    {!! Form::errorBackend('text', $errors) !!}
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
            </div>
            <div class="box-footer">
                <a href="{!! route('testimonials.list') !!}" class="btn bg-blue margin"><i class="fa fa-arrow-left"></i>{!! Lang::get('html.btn.back') !!}</a>
                @if (isset($data))
                    {!! Form::hidden('id', $data->id) !!}
                    <a href="{!! route('testimonial.destroy', [$data->id]) !!}" class="btn btn-danger"><i class="fa fa-times-circle"></i>{!! Lang::get('html.btn.delete') !!}</a>
                @endif
                {!! Form::button('<i class="fa fa-save"></i> ' . Lang::get('html.btn.save'), ['type' => 'submit', 'class' => 'btn btn-success margin']) !!}
            </div>
        </div>
    {!! Form::close() !!}

@stop
