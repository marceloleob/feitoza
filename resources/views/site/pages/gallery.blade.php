@extends('site.layouts.pages')

@section('title-page', 'Image Gallery')

@section('css-custom')
{!! Html::style('vendor/lightgallery/css/lightgallery.css') !!}
{!! Html::style('css/site/pages/gallery.css') !!}
@stop

@section('js-custom')
{{-- JS LIBS / LIGHTGALLERY --}}
{!! Html::script('vendor/lightgallery/js/picturefill.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/lightgallery/js/lightgallery.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/lightgallery/js/lg-thumbnail.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/lightgallery/js/lg-fullscreen.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/lightgallery/js/jquery.mousewheel.min.js', ['defer' => 'defer']) !!}
@endsection


@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Gallery Section --}}
						<section class="gallery-classic-section">
							<div class="auto-container">
								@if (count($pictures))
								{{-- MixitUp Galery --}}
								<div class="mixitup-gallery">
									{{-- Filter Galery --}}
									<div class="filters clearfix">
										<ul class="filter-tabs filter-btns clearfix">
											<li class="filter" data-role="button" data-filter="all">All</li>
											{{-- Galery Block --}}
											@foreach ($galleries as $gallery)
											<li class="filter" data-role="button" data-filter=".{!! $gallery->friendly !!}">{!! $gallery->name !!}</li>
											@endforeach
											{{-- Galery Block --}}
										</ul>
									</div>

									<div id="lightgallery" class="gallery-list row clearfix">
										{{-- Picture Block --}}
										@foreach ($pictures as $picture)
										<div class="gallery-item mix {!! $picture->friendly !!} all col-lg-4 col-md-4 col-sm-6 col-xs-12" data-src="{!! url('storage/' . $picture->photo) !!}">
											<div class="inner-box">
												<a href="#">
													<img src="{!! url('storage/' . $picture->photo) !!}" alt="" class="{!! strtolower($picture->position) !!}-picture" />
												</a>
											</div>
										</div>
										@endforeach
										{{-- Picture Block --}}
									</div>
								</div>
								@else
									<div class="no-gallery">There is no pictures yet.</div>
								@endif
							</div>
						</section>
						{{-- End Gallery Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
