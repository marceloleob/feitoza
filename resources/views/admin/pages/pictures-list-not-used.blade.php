@extends('admin.layouts.list')

@section('title-page-lg', 'Pictures')

@section('title-page-sm', 'Pictures`s list to services')

@section('button-add')
    <a href="{!! route('pictures.create') !!}" class="btn bg-blue margin"><i class="fa fa-plus-circle"></i> &nbsp; New picture</a>
@stop

@section('box')

    @if (count($data))
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th width="30%" class="text-center">Service</th>
                        <th width="25%" class="text-center">Picture</th>
                        <th width="7%"  class="text-center">Extension</th>
                        <th width="8%"  class="text-center">Size</th>
                        <th width="10%" class="text-center">Status</th>
                        <th width="20%" class="text-center" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td>{!! $value->services->name !!}</td>
                            <td>{!! $value->photo !!}</td>
                            <td class="text-center">{!! $value->extension !!}</td>
                            <td class="text-center">{!! $value->size !!} Kb</td>
                            <td class="text-center"><span class="label label-{!! $value->status['class'] !!}">{!! $value->status['label'] !!}</span></td>
                            <td class="text-center"><a href="{!! route('gallery.picture.edit', $value->id) !!}" class="btn btn-warning btn-sm ad-click-event"><i class="fa fa-edit"></i>{!! Lang::get('html.btn.edit') !!}</a></td>
                            <td class="text-center"><a href="#" class="btn btn-danger btn-sm ad-click-event"><i class="fa fa-times-circle"></i>{!! Lang::get('html.btn.delete') !!}</a></td>
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
