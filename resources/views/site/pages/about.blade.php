@extends('site.layouts.pages')

@section('title-page', 'About Us')

@section('css-custom')
{!! Html::style('css/site/pages/about.css') !!}
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
											{{-- <div class="styled-text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div> --}}
											<div class="text">
                                                <p>{!! Config::get('app.name') !!} has been active with projects of all sizes, working primarily in Houses and Commercial places. </p>
                                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh
                                                pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam
                                                vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla
                                                sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus
                                                suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Sed porttitor lectus nibh.</p>
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
