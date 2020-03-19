@extends('site.layouts.pages')

@section('title-page', 'Testimonials')

@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						<!--Testimonial Section-->
						<section class="testimonial-page-section">
							<div class="auto-container">
								{{--
								<div class="sec-title">
									<h2>What our customers says</h2>
								</div>
								<div class="styled-text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>
								--}}
								<div class="row clearfix">
									@if (count($testimonials))
										<!--Testimonial Block-->
										@foreach ($testimonials as $testimonial)
										<div id="{!! $testimonial->id !!}" class="testimonial-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="inner-box">
												<div class="content">
													<div class="left-box">
														<div class="quote-icon"><span class="icon fa fa-quote-left"></span></div>
													</div>
													<h3>{!! $testimonial->name !!}</h3>
													<div class="text">{!! $testimonial->text !!}</div>
												</div>
											</div>
										</div>
										@endforeach
										<!--Testimonial Block-->
									@else
										<div class="no-testimonial">There is no testimonial yes.</div>
									@endif
								</div>
							</div>
						</section>
						<!--End Testimonial Section-->
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
