@extends('site.layouts.home')

@section('css-custom')
{!! Html::style('css/site/pages/home.css') !!}
@stop

@section('content')

	{{-- Slide Section --}}
	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						<section class="main-slider">
                            <div class="owl-slider owl-carousel owl-theme owl-loaded owl-drag">
                                <img src="{!! asset('images/slider/01.jpg') !!}"  alt="" title=""  width="1920" height="653" />
                                <img src="{!! asset('images/slider/02.jpg') !!}"  alt="" title=""  width="1920" height="653" />
                            </div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End Slide Section --}}

	{{-- Welcome Section --}}
	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						<section class="welcome-section">
							<div class="auto-container">
								<div class="row clearfix">
                                    {{-- Text Column --}}
									<div class="content-column col-md-7 col-sm-12 col-xs-12">
										<div class="inner-column">
											<div class="sec-title">
												<h2>{!! Config::get('app.name') !!}</h2>
											</div>
											<div class="styled-text">Is a full-service wallpapers services company.</div>
											<div class="text">
                                                {!! Config::get('app.name') !!} and surrounding Middlesex counties, are committed providing our clients with the finest quality wallpaper installation service in home and business. <br />
                                                Our experience will help you discover and transform your home or business into the home or business of your dreams.
                                                We specialize in interior projects of all sizes. <br /> <br />
                                                We have been working in the Boston area for over five years and want to bring our high expertise to your new home or office.
                                                {!! Config::get('app.name') !!} takes pride in attention to detail, high-quality, and timely work.
											</div>
											<div class="number">Call us for a free estimate <span>(781) 366-8429</span></div>
										</div>
									</div>
									{{-- Image Column --}}
									<div class="image-column col-md-5 col-sm-6 col-xs-12">
										<div class="inner-column">
											<div class="image">
												<img src="{!! asset('images/background/welcome.jpg') !!}" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End Welcome Section --}}

    {{-- Offer Section --}}
    @if (count($gallery))
	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Offer Section --}}
						<section class="offer-section">
							<div class="auto-container">
								<div class="sec-title">
									<h2>Image Gallery</h2>
									<div class="text">These are some of the photos from our gallery.</div>
								</div>
								<div class="row clearfix">
									{{-- Pictures Block Four --}}
									@foreach ($gallery as $picture)
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! url('storage/' . $picture->photo) !!}" alt="{!! $picture->name !!}" class="{!! strtolower($picture->position) !!}-picture" />
													<div class="overlay-box">
														<a href="{!! route('gallery', $picture->friendly) !!}" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="{!! route('gallery', $picture->friendly) !!}">{!! $picture->name !!}</a></h3></div>
											</div>
                                        </div>
									@endforeach
									{{-- End Pictures Block Four --}}
								</div>
							</div>
						</section>
						{{-- End Offer Section --}}
					</div>
				</div>
			</div>
		</div>
    </section>
    @endif
	{{-- End Offer Section --}}

	{{-- Reviews Section --}}
	@if (count($reviews) > 1)
	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Reviews Section --}}
						<section class="review-section">
							<div class="auto-container">
								<div class="title-box">
									<h2>Reviews</h2>
									<div class="title">Dozens of people get benefit</div>
								</div>
								{{-- Reviews Carousel --}}
								<div class="owl-reviews owl-carousel owl-theme owl-loaded">
									<div class="owl-stage-outer">
										<div class="owl-stage">
											{{-- Reviews Box --}}
											@foreach ($reviews as $review)
												<div class="owl-item">
													<div class="review-block">
														<div class="inner-box">
															<div class="content">
																<div class="left-box">
																	<div class="quote-icon"><i class="icon fas fa-quote-left"></i></div>
																</div>
																<h3>{!! $review->name !!}</h3>
																<div class="text">{!! Str::limit($review->text, 160, '...') !!}</div>
																<div class="readmore"><a href="{!! url('reviews#' . $review->id) !!}">read more</a></div>
															</div>
														</div>
													</div>
												</div>
											@endforeach
											{{-- Reviews Box --}}
										</div>
									</div>
								</div>
								{{-- End Reviews Carousel --}}
								<div class="footer-box">
									<h2><a href="{!! route('review') !!}">See all reviews</a></h2>
								</div>
							</div>
						</section>
						{{-- End Reviews Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	{{-- End review Section --}}

	{{-- Sponsors Section --}}
	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Sponsors Section --}}
						<section class="sponsors-section">
							<div class="auto-container">
								<div class="sponsors-outer">
									{{-- Sponsors Carousel --}}
									<ul class="owl-sponsors owl-carousel owl-theme owl-loaded owl-drag">
										<li class="slide-item"><figure class="image-box"><a href="#" target="_blank"><img src="{!! asset('images/badge/angies.png') !!}" alt=""></a></figure></li>
										<li class="slide-item"><figure class="image-box"><a href="#" target="_blank"><img src="{!! asset('images/badge/elite-service.png') !!}" alt=""></a></figure></li>
										<li class="slide-item"><figure class="image-box"><a href="#" target="_blank"><img src="{!! asset('images/badge/us-green.png') !!}" alt=""></a></figure></li>
										<li class="slide-item"><figure class="image-box"><a href="https://www.thumbtack.com/ma/chelsea/wallpaper-installation/feitoza-wallpaper-decor/service/334104293840552180" target="_blank"><img src="{!! asset('images/badge/thumbtack.png') !!}" alt=""></a></figure></li>
										<li class="slide-item"><figure class="image-box"><a href="#" target="_blank"><img src="{!! asset('images/badge/yelp.png') !!}" alt=""></a></figure></li>
									</ul>
									{{-- End Sponsors Carousel --}}
								</div>
							</div>
						</section>
						{{-- End Sponsors Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
