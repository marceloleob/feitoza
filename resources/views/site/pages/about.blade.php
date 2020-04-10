@extends('site.layouts.pages')

@section('title-page', 'About Us')

@section('css-custom')
    {!! Html::style('css/site/pages/about.css') !!}
	@if (!empty($device))
		{!! Html::style('css/site/' . $device . '/about.css') !!}
	@endif
@stop

@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Welcome Section --}}
						<section class="aboutus-section">
							<div class="auto-container">
								<div class="row clearfix">
									{{-- Content Column --}}
									<div class="content-column col-md-8 col-sm-12 col-xs-12">
										<div class="inner-column">
											{{-- Sec Title --}}
											<div class="sec-title">
												<h2>We are Certified Wallpaper Company</h2>
											</div>
											<div class="styled-text">Whether you have a commercial project or a homeowner you can count on {!! Config::get('app.name') !!} installers to meet your needs.</div>
											<div class="text">
                                                <p>
                                                    {!! Config::get('app.name') !!} and surrounding Middlesex counties, are committed providing our clients with the finest quality wallpaper installation service in home and business. <br />
                                                    Our experience will help you discover and transform your home or business into the home or business of your dreams.
                                                </p>
                                                <p>
                                                    Our work ethics and dedication to excellence has established our company as the preferred choice of quality mind clients.
                                                    Feitoza Wallpaper Decor Hangers  family owned and operated, serving Middlesex county. 
                                                </p>
                                                <p>We take great pride in customer care, quality of service and superior workmanship with competitive pricing.</p>
											</div>
										</div>
									</div>
									{{-- Image Column --}}
									<div class="image-column col-md-4 col-sm-6 col-xs-12">
										<div class="inner-column">
											<div class="image">
												<img src="{!! asset('images/gallery/15.jpg') !!}" alt="">
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

@stop
