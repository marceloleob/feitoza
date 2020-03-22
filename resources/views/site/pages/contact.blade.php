@extends('site.layouts.pages')

@section('title-page', 'Contact Us')

@section('css-custom')
{!! Html::style('css/site/pages/contact.css') !!}
@stop

@section('content')

	<section class="row">
		<div class="row-container container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Contact Info Section --}}
						<section class="contact-info-section">
							<div class="auto-container">
								<div class="row clearfix phone-email">
									{{-- Info Block --}}
									<div class="info-block col-md-6 col-sm-6 col-xs-12">
										<div class="info-inner">
											<div class="icon-box">
												<span class="icon flaticon-mail"></span>
											</div>
											<h3>Email Address</h3>
											<div class="text">{!! config('constants.COMPANY_EMAIL') !!}</div>
										</div>
									</div>
									{{-- Info Block --}}
									<div class="info-block col-md-6 col-sm-6 col-xs-12 telephone-block">
										<div class="info-inner">
											<div class="icon-box">
												<span class="icon flaticon-telephone"></span>
											</div>
											<h3>Contact</h3>
											<div class="text">(781) 366-8429</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						{{-- End Contact Info Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="col-sm-12 column col-sm-12">
					<div class="col-container">
						{{-- Appointment Section --}}
						<section class="contact-section">
							<div class="auto-container">
								<div class="row clearfix">
									{{-- Form Column --}}
									<div class="form-column col-md-8 col-sm-12 col-xs-12">
										<div class="inner-column">
											{{--  Default Form / Contact Form  --}}
											<div class="default-form">
												<div class="row clearfix">
													<div class="error-message">
														{!! Form::boxNotification($errors) !!}
													</div>
												</div>
												<div class="screen-reader-response"></div>
												{!! Form::open(['id' => 'contact-form', 'route' => 'send', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
													<div class="row clearfix">
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('firstname', '', ['class' => 'form-control text', 'placeholder' => 'First name']) !!}
																{!! Form::notification('firstname', $errors) !!}
															</span>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('lastname', '', ['class' => 'form-control text', 'placeholder' => 'Last name']) !!}
																{!! Form::notification('lastname', $errors) !!}
															</span>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::email('email', '', ['class' => 'form-control email', 'placeholder' => 'E-mail']) !!}
																{!! Form::notification('email', $errors) !!}
															</span>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('phone', '', ['class' => 'form-control text phone phoneOnly', 'placeholder' => 'Phone number']) !!}
																{!! Form::notification('phone', $errors) !!}
															</span>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('subject', '', ['class' => 'form-control text', 'placeholder' => 'Subject']) !!}
																{!! Form::notification('subject', $errors) !!}
															</span>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::textarea('text', '', ['class' => 'form-control textarea', 'placeholder' => 'Message']) !!}
																{!! Form::notification('text', $errors) !!}
															</span>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
															{!! Form::button('<i class="far fa-paper-plane"></i> Send', ['type' => 'submit', 'class' => 'submit theme-btn btn-style']) !!}
														</div>
													</div>
													<div class="response-output display-none"></div>
												{!! Form::close() !!}

											</div>
											{{-- End Default Form  --}}
										</div>
									</div>
									{{-- Image Column --}}
									<div class="image-column col-md-4 col-sm-12 col-xs-12">
										<div class="image">
											<img src="{!! asset('images/background/contact.png') !!}" alt="" />
										</div>
									</div>
									{{-- End Image Column --}}
								</div>
							</div>
						</section>
						{{-- End Appointment Section --}}
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
