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
                                @if (count($reviews))
                                    <div class="sec-title">
                                        <h2>What our customers says</h2>
                                    </div>
                                    <div class="styled-text">These are some of the reviews we received on other media, to confirm just click on the reference link to the text.</div>
                                    <div class="row clearfix">
										{{-- Reviews Block --}}
										@foreach ($reviews as $review)
										<div id="{!! $review->id !!}" class="review-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="inner-box">
												<div class="content">
													<div class="left-box">
														<div class="quote-icon"><span class="icon fa fa-quote-left"></span></div>
													</div>
													<h3>{!! $review->name !!}</h3>
                                                    <div class="text">{!! nl2br($review->text) !!}</div>
                                                    <div class="link">
                                                        <a href="{!! $review->link !!}" target="_blank">Click to see the original post</a>
                                                    </div>
												</div>
											</div>
										</div>
										@endforeach
										{{-- Reviews Block --}}
                                    </div>
                                @else
                                    <div class="no-review">There is no review yet.</div>
                                @endif
							</div>
						</section>
						{{-- End Reviews Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
