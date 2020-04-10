@extends('admin.layouts.main')

@section('content')

<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div class="page-title-icon">
				<i class="far fa-images icon-gradient bg-plum-plate"></i>
			</div>
			<div>
				Imagens
				<div class="page-title-subheading">Lista de todas as fotos do site.</div>
			</div>
		</div>
		<div class="page-title-actions">
			<div class="d-inline-block dropdown">
				<a href="{!! route('picture.new') !!}" class="mb-2 mr-2 btn-transition btn btn-outline-primary">
					<span class="btn-icon-wrapper pr-2 opacity-9"><i class="fas fa-plus-circle fa-w-20"></i></span> Adicionar
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

@if (count($data))
	<div class="row">
		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-header">Lista
					<div class="btn-actions-pane-right search">
						<div role="group" class="btn-group-sm btn-group">
                            {!! Form::open(['id' => 'form-search', 'route' => 'picture.search', 'method' => 'POST', 'role' => 'group']) !!}
                                @csrf
								<div class="custom-control custom-control-inline input-group">
									{!! Form::text('search', ($search ?? ''), ['class' => 'form-control', 'placeholder' => 'Procurar por categoria']) !!}
									<div class="input-group-append mr-2">
										{!! Form::button('<i class="fas fa-search pr-2 pl-2"></i>', ['type' => 'submit', 'class' => 'btn btn-focus']) !!}
									</div>
									{!! Form::button('<i class="fas fa-backspace pr-2 pl-2"></i> Limpar a busca', ['type' => 'button', 'class' => 'btn btn-focus clear-search']) !!}
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="align-middle mb-0 table table-borderless table-striped table-hover">
						<thead>
							<tr>
								<th width="10%" class="text-center"><b>Código</b></th>
								<th width="20%" class="text-center"><b>Imagem</b></th>
								<th width="40%" class="text-left"><b>Galeria</b></th>
								<th width="15%" class="text-center"><b>Status</b></th>
								<th width="15%" class="text-center"><b>Ações</b></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $item)
							<tr>
                                <td class="text-center text-muted">{!! $item->id !!}</td>
								<td class="text-center">
                                    <img src="{!! url($item->photo) !!}" alt="" class="photo" />
                                </td>
                                <td class="text-left">{!! $item->gallery->name !!}</td>
								<td class="text-center"><div id="div-{!! $item->id !!}" class="div-{!! $item->id !!} badge badge-{!! $item->status['class'] !!}">{!! $item->status['label'] !!}</div></td>
                                <td class="text-center">
                                    <a href="{!! route('picture.edit', $item->id) !!}" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="{!! route('picture.toggle', $item->id) !!}" class="border-0 btn-transition btn {!! $item->trash['class'] !!}"><i class="fas {!! $item->trash['label'] !!}"></i></a>
                                </td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="col-md-12 pt-3">
						<div class="float-left">{!! $paginate !!}</div>
						<div class="float-right">Exibindo de {!! $data->firstItem() !!} até {!! $data->lastItem() !!} de um total de {!! $data->total() !!} registros.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@else
	<div class="row">
		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-no-records">
					Nenhum registro encontrado!
				</div>
			</div>
		</div>
	</div>
@endif

@endsection
