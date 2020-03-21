@extends('site.layouts.home')

@section('css-custom')
{!! Html::style('css/site/pages/home.css') !!}
@stop

@section('content')

	{{-- Slide Section --}}
	<section class="elm row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
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
	<section class="elm row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
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
                                                We specialize in interior projects of all sizes.
                                                We have been working in the Boston area <br /> for over five years and want to bring our high expertise to your new home or office. <br />
                                                Feitoza Wallpapers Decor takes pride in attention to detail, high-quality, and timely work.
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
						{{-- End Welcome Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End Welcome Section --}}

	{{-- Offer Section --}}
	<section class="elm row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Offer Section --}}
						<section class="offer-section">
							<div class="auto-container">
								<div class="sec-title">
									<h2>Image Gallery</h2>
									{{--<div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards</div>--}}
								</div>
								<div class="row clearfix">
									{{-- Services Block Four --}}
									{{-- @foreach ($services as $service) --}}
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! asset('images/gallery/02.jpg') !!}" alt="" width="370" height="278" />
													<div class="overlay-box">
														<a href="#" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="#">Name</a></h3></div>
											</div>
										</div>
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! asset('images/gallery/09.jpg') !!}" alt="" width="370" height="278" />
													<div class="overlay-box">
														<a href="#" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="#">Name</a></h3></div>
											</div>
										</div>
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! asset('images/gallery/04.jpg') !!}" alt="" width="370" height="278" />
													<div class="overlay-box">
														<a href="#" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="#">Name</a></h3></div>
											</div>
										</div>
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! asset('images/gallery/08.jpg') !!}" alt="" width="370" height="278" />
													<div class="overlay-box">
														<a href="#" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="#">Name</a></h3></div>
											</div>
										</div>
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! asset('images/gallery/06.jpg') !!}" alt="" width="370" height="278" />
													<div class="overlay-box">
														<a href="#" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="#">Name</a></h3></div>
											</div>
										</div>
										<div class="services-block-four col-md-4 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image">
													<img src="{!! asset('images/gallery/07.jpg') !!}" alt="" width="370" height="278" />
													<div class="overlay-box">
														<a href="#" class="theme-btn detail-btn">View Details</a>
													</div>
												</div>
												<div class="lower-content"><h3><a href="#">Name</a></h3></div>
											</div>
										</div>
									{{-- @endforeach --}}
									{{-- End Services Block Four --}}
								</div>
							</div>
						</section>
						{{-- End Offer Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End Offer Section --}}

	{{-- Testimonial Section --}}
	{{-- @if (count($testimonials)) --}}
	<section class="elm row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Testimonial Section --}}
						<section class="testimonial-section">
							<div class="auto-container">
								<div class="title-box">
									<h2>Testimonials</h2>
									<div class="title">Dozens of people get benefit</div>
								</div>
								{{-- Testimonial Carousel --}}
								<div class="owl-testimonials owl-carousel owl-theme owl-loaded">
									<div class="owl-stage-outer">
										<div class="owl-stage">
											{{-- Testimonial Box --}}
											{{-- @foreach ($testimonials as $testimonial) --}}
												<div class="owl-item">
													<div class="testimonial-block">
														<div class="inner-box">
															<div class="content">
																<div class="left-box">
																	<div class="quote-icon"><i class="icon fas fa-quote-left"></i></div>
																</div>
																<h3>Marcelo Leopold</h3>
																<div class="text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet
                                                                quam id dui posuere blandit.,</div>
																<div class="readmore"><a href="#">read more</a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item">
													<div class="testimonial-block">
														<div class="inner-box">
															<div class="content">
																<div class="left-box">
																	<div class="quote-icon"><i class="icon fas fa-quote-left"></i></div>
																</div>
																<h3>Paulo Feitoza</h3>
																<div class="text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet
                                                                quam id dui posuere blandit.,</div>
																<div class="readmore"><a href="#">read more</a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item">
													<div class="testimonial-block">
														<div class="inner-box">
															<div class="content">
																<div class="left-box">
																	<div class="quote-icon"><i class="icon fas fa-quote-left"></i></div>
																</div>
																<h3>Fulano Silva</h3>
																<div class="text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet
                                                                quam id dui posuere blandit.,</div>
																<div class="readmore"><a href="#">read more</a></div>
															</div>
														</div>
													</div>
												</div>
											{{-- @endforeach --}}
											{{-- Testimonial Box --}}
										</div>
									</div>
								</div>
								{{-- End Testimonial Carousel --}}
								<div class="footer-box">
									<h2><a href="{!! url('testimonial') !!}">See all testimonials</a></h2>
								</div>
							</div>
						</section>
						{{-- End Testimonial Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- @endif --}}
	{{-- End Testimonial Section --}}

	{{-- Sponsors Section --}}
	<section class="elm row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
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
										<li class="slide-item"><figure class="image-box"><a href="#" target="_blank"><img src="{!! asset('images/badge/thumbtack.png') !!}" alt=""></a></figure></li>
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
