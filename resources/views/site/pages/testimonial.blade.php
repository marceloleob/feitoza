@extends('site.layouts.pages')

@section('title-page', 'Testimonials')

@section('css-custom')
{!! Html::style('css/site/pages/testimonial.css') !!}
@stop

@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Testimonial Section --}}
						<section class="testimonial-page-section">
							<div class="auto-container">
								{{--
								<div class="sec-title">
									<h2>What our customers says</h2>
								</div>
								<div class="styled-text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>
								--}}
								<div class="row clearfix">
									{{-- @if (count($testimonials)) --}}
										{{-- Testimonial Block --}}
										{{-- @foreach ($testimonials as $testimonial) --}}
										{{-- <div id="{!! $testimonial->id !!}" class="testimonial-block col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
										<div id="" class="testimonial-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="inner-box">
												<div class="content">
													<div class="left-box">
														<div class="quote-icon"><span class="icon fa fa-quote-left"></span></div>
													</div>
													{{-- <h3>{!! $testimonial->name !!}</h3> --}}
													{{-- <div class="text">{!! $testimonial->text !!}</div> --}}
													<h3>Marcelo Leopold</h3>
													<div class="text">Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus suscipit
                                                    tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta
                                                    dapibus. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante
                                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel,
                                                    ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis
                                                    ac lectus.</div>
												</div>
											</div>
										</div>
										{{-- @endforeach --}}
										{{-- Testimonial Block --}}
									{{-- @else
										<div class="no-testimonial">There is no testimonial yes.</div>
									@endif --}}
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
