@extends('admin.layouts.main')

@section('content')

	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">
				<div class="page-title-icon">
					<i class="fas fa-chart-line icon-gradient bg-ripe-malin">
					</i>
				</div>
				<div>
					Área Administrativa - {!! Config::get('app.name') !!}
					<div class="page-title-subheading"></div>
				</div>
			</div>
		</div>
    </div>


@endsection
