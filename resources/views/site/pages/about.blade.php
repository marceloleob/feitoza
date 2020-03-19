@extends('site.layouts.pages')

@section('title-page', 'About Us')

@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						<!--Welcome Section-->
						<section class="aboutus-section">
							<div class="auto-container">
								<div class="row clearfix">
									<!--Content Column-->
									<div class="content-column col-md-8 col-sm-12 col-xs-12">
										<div class="inner-column">
											<!--Sec Title-->
											<div class="sec-title">
												<h2>We are Certified Painting Company</h2>
											</div>
											{{--<div class="styled-text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>--}}
											<div class="text">
												<p>Is a full-service painting contractor specializing in Residential & Commercial Painting, <br /> has been providing the highest-quality painting services in the <br /> <strong>Palm Beach County, St. Luice County, Martin County</strong> area, FL for several decades. </p>
												<p>{!! Config::get('app.name') !!} has been active with projects of all sizes, <br /> working primarily in House Painting, Interior Painting, and Commercial Painting. </p>
												<p>Our projects range in size from leak restoration to Residential and Commercial Projects.</p>
											</div>
										</div>
									</div>
									<!--Image Column-->
									<div class="image-column col-md-4 col-sm-6 col-xs-12">
										<div class="inner-column">
											<div class="image">
												<img src="{!! asset('images/background/welcome.png') !!}" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--End Welcome Section-->
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
