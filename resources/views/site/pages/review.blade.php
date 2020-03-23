@extends('site.layouts.pages')

@section('title-page', 'Reviews')

@section('css-custom')
{!! Html::style('css/site/pages/review.css') !!}
@stop

@section('content')

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Reviews Section --}}
						<section class="review-page-section">
							<div class="auto-container">
								{{--
								<div class="sec-title">
									<h2>What our customers says</h2>
								</div>
								<div class="styled-text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>
								--}}
								<div class="row clearfix">
									{{-- @if (count($reviews)) --}}
										{{-- Reviews Block --}}
										{{-- @foreach ($reviews as $review) --}}
										{{-- <div id="{!! $review->id !!}" class="review-block col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
										<div id="" class="review-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="inner-box">
												<div class="content">
													<div class="left-box">
														<div class="quote-icon"><span class="icon fa fa-quote-left"></span></div>
													</div>
													{{-- <h3>{!! $review->name !!}</h3> --}}
													{{-- <div class="text">{!! $review->text !!}</div> --}}
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
										{{-- Reviews Block --}}
									{{-- @else
										<div class="no-review">There is no review yes.</div>
									@endif --}}
								</div>
							</div>
						</section>
						{{-- End Reviews Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
