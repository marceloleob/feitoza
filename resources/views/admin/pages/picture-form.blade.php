@extends('admin.layouts.main')

@section('js-custom')
{!! Html::script('vendor/validation/jquery.validate.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/jquery.validate.' . $locale . '.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/validations.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/validation/masks.' . $locale . '.js', ['defer' => 'defer']) !!}
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
        <div class="alert alert-info">
		    <i class="fas fa-info-circle"></i> &nbsp; Não esqueça de <b><a href="https://cloudconvert.com/heic-to-jpg" target="_blank">converter</a></b> as fotos para JPG antes de enviar!
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
				{!! Form::open(['id' => 'form-picture', 'route' => 'picture.store', 'method' => 'POST', 'role' => 'form', 'class' => 'form', 'files' => true]) !!}
					@csrf
					<div class="position-relative form-group">
						{!! Form::label('gallery_id', 'Galeria') !!}
						{!! Form::select('gallery_id', $options, old('gallery_id', $data->gallery_id), ['class' => 'form-control mdb-select md-form colorful-select dropdown-primary']) !!}
						{!! Form::notification('gallery_id', $errors) !!}
					</div>
					<div class="position-relative form-group">
						<label for="photo" class="custom-file-upload btn-primary">
							<i class="fas fa-cloud-upload-alt"></i> Clique para enviar uma foto
							{!! Form::file('photo[]', ['id' => 'photo', 'multiple' => true]) !!}
						</label>
						{!! Form::notification('photo', $errors) !!}
					</div>

					{!! Form::button('<i class="far fa-save"></i> &nbsp; Salvar', ['type' => 'submit', 'class' => 'btn btn-success mb-2 mr-2']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
