@extends('site.layouts.pages')

@section('title-page', 'Image Gallery')

@section('css-custom')
{!! Html::style('css/site/pages/gallery.css') !!}
@stop

@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Testimonial Section --}}
						<section class="gallery-classic-section">
							<div class="auto-container">
								{{-- MixitUp Galery --}}
								<div class="mixitup-gallery">
									{{-- Filter Galery --}}
									<div class="filters clearfix">
										<ul class="filter-tabs filter-btns clearfix">
											<li class="filter" data-role="button" data-filter="all">All</li>
											<li class="filter" data-role="button" data-filter=".bathroom">Bathroom</li>
											<li class="filter" data-role="button" data-filter=".kitchen">Kitchen</li>
											<li class="filter" data-role="button" data-filter=".lobby">Lobby</li>
											<li class="filter" data-role="button" data-filter=".stairway">Stairway</li>
											<li class="filter" data-role="button" data-filter=".bedroom">Bedroom</li>
											<li class="filter" data-role="button" data-filter=".living">Living Room</li>
											<li class="filter" data-role="button" data-filter=".dining">Dining Room</li>
										</ul>
									</div>
									{{-- Galery --}}
									<div class="gallery-list row clearfix">
										<div class="gallery-item mix kitchen all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/01.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix living all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/02.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bedroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/03.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bedroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/04.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix stairway all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/06.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix stairway all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/07.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bathroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/08.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bathroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/09.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bedroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/10.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bedroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/11.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix living all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/12.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix living all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/13.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix living all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/14.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bedroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/15.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix bedroom all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/16.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix living all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/17.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix lobby all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/no-available.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
										<div class="gallery-item mix dining all col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<img src="{!! asset('images/gallery/no-available.jpg') !!}" alt="" class="image-box">
											</div>
										</div>
									{{-- Galery --}}
									</div>
								</div>
							</div>
						</section>
						{{-- End Testimonial Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
