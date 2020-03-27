@extends('admin.layouts.main')

@section('css-custom')
{!! Html::style('vendor/bootstrap-select/css/bootstrap-select.min.css') !!}
@stop

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
				Review
				<div class="page-title-subheading">Formulário das reviews.</div>
			</div>
		</div>
		<div class="page-title-actions">
			<div class="d-inline-block dropdown">
				<a href="{!! route('review.list') !!}" class="mb-2 mr-2 btn-transition btn btn-outline-focus">
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
                {!! Form::open(['id' => 'form-gallery', 'route' => 'review.store', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                    @csrf
					<div class="position-relative form-group">
						{!! Form::label('name', 'Nome da pessoa') !!}
						{!! Form::text('name', old('name', $data->name), ['class' => 'form-control text']) !!}
						{!! Form::notification('name', $errors) !!}
					</div>
					<div class="position-relative form-group">
						{!! Form::label('link', 'Link do verdadeiro review') !!}
						{!! Form::text('link', old('link', $data->link), ['class' => 'form-control text']) !!}
						{!! Form::notification('link', $errors) !!}
					</div>
					<div class="position-relative form-group">
						{!! Form::label('text', 'Texto') !!}
						{!! Form::textarea('text', old('text', $data->text), ['class' => 'form-control']) !!}
						{!! Form::notification('text', $errors) !!}
					</div>

					@if (isset($data->id))
						{!! Form::hidden('id', $data->id, ['id' => 'id']) !!}
					@endif
					{!! Form::button('<i class="far fa-save"></i> &nbsp; Salvar', ['type' => 'submit', 'class' => 'btn btn-success mb-2 mr-2']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
