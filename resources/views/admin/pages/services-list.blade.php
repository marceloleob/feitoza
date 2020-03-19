@extends('admin.layouts.list')

@section('title-page-lg', Lang::get('bestway.admin.services.list.title'))

@section('title-page-sm', Lang::get('bestway.admin.services.list.subtitle'))

@section('button-add')
    &nbsp;
@stop

@section('box')

    @if (count($data))
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th width="50%" class="text-center">{!! Lang::get('bestway.admin.services.list.grid.title.name') !!}</th>
                        <th width="20%" class="text-center">{!! Lang::get('html.grid.title.status') !!}</th>
                        <th width="30%" class="text-center">{!! Lang::get('html.grid.title.actions') !!}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td>{!! $value->name !!}</td>
                            <td class="text-center"><span class="label label-{!! $value->status['class'] !!}">{!! $value->status['label'] !!}</span></td>
                            <td class="text-center"><a href="{!! route('service.edit', $value->id) !!}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>{!! Lang::get('html.btn.edit') !!}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h5 class="text-right total-grid">
                {!! Lang::get('html.grid.paginate', ['first' => $data->firstItem(), 'last' => $data->lastItem(), 'total' => $data->total()]) !!}
            </h5>
        </div>
	@else
		<div class="no-records-found">{!! Lang::get('messages.no.records.found') !!}</div>
    @endif

@stop
