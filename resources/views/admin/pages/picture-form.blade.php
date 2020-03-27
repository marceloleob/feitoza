@extends('admin.layouts.main')

@section('css-custom')
{{-- {!! Html::style('vendor/bootstrap/css/bootstrap.css') !!} --}}
{{-- {!! Html::style('vendor/jquery-filestyle/jquery-filestyle.min.css') !!} --}}
@stop

@section('js-custom')
{!! Html::script('vendor/validation/jquery.validate.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/jquery.validate.' . $locale . '.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/validations.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/masks.' . $locale . '.js', ['defer' => 'defer']) !!}
{{-- {!! Html::script('vendor/bootstrap-filestyle/bootstrap-filestyle.min.js', ['defer' => 'defer']) !!} --}}
{{-- {!! Html::script('vendor/jquery-filestyle/jquery-filestyle.min.js', ['defer' => 'defer']) !!} --}}
@stop

@section('content')

<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div class="page-title-icon">
				<i class="fas fa-store icon-gradient bg-plum-plate"></i>
			</div>
			<div>
				Fotos
				<div class="page-title-subheading">Formulário de fotos das galerias.</div>
			</div>
		</div>
		<div class="page-title-actions">
			<div class="d-inline-block dropdown">
				<a href="{!! route('picture.list') !!}" class="mb-2 mr-2 btn-transition btn btn-outline-focus">
					<span class="btn-icon-wrapper pr-2 opacity-9"><i class="fas fa-arrow-circle-left fa-w-20"></i></span>
					Voltar
				</a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		{!! Form::boxNotification($errors) !!}
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title">Preencha o formulário</h5>
                {!! Form::open(['id' => 'form-picture', 'route' => 'picture.store', 'method' => 'POST', 'files' => true]) !!}
                    @csrf
					<div class="position-relative form-group">
						{!! Form::label('gallery_id', 'Galeria') !!}
						{!! Form::select('gallery_id', $options, old('gallery_id', $data->gallery_id), ['class' => 'form-control mdb-select md-form colorful-select dropdown-primary']) !!}
						{!! Form::notification('gallery_id', $errors) !!}
					</div>
					<div class="position-relative form-group">
                        <label for="photo" class="custom-file-upload btn-primary">
                            <i class="fas fa-cloud-upload-alt"></i> Clique para enviar a foto
                            {!! Form::file('photo', ['id' => 'photo']) !!}
                        </label>
						{!! Form::notification('photo', $errors) !!}
                    </div>

                    @if (isset($data->id))
                        <img src="{!! asset(config('constants.PICTURES_PATH') . $data->friendly . '/' . $data->photo) !!}" class="edit-picture" alt="" />

						{!! Form::hidden('id', $data->id, ['id' => 'id']) !!}
					@endif
					{!! Form::button('<i class="far fa-save"></i> &nbsp; Salvar', ['type' => 'submit', 'class' => 'btn btn-success mb-2 mr-2']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

{{-- @if (!empty($album) && count($album) != 0)
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary gallery">
            <div class="box-body">
                <div class="row clearfix">
                    <div class="gallery-title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4>Galeria</h4>
                    </div>
                    @foreach ($album as $value)
                        <div class="gallery-item all col-lg-3 col-md-3 col-sm-6 col-xs-12" style="display: inline-block;">
                                <div class="star {!! ($value->showhome == 0) ? 'hidden' : '' !!}"><span class="icon fa fa-star"></span></div>
                                <div class="inner-box">
                                <figure class="photo-box">
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
    </div>
</div>
@endif --}}

@endsection
