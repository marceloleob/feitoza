@extends('site.layouts.pages')

@section('title-page', 'Contact Us')

@section('js-custom')
	{{-- JS LIBS --}}
	{!! Html::script('js/libs/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/libs/jquery.validate.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/libs/jquery.validate.message.' . App::getLocale() . '.js', ['defer' => 'defer']) !!}
@stop

@section('content')

	<section class="row">
		<div class="row-container container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						<!--Contact Info Section-->
						<section class="contact-info-section">
							<div class="auto-container">
								<!--Title Box-->
								{{--
								<div class="title-box">
									<h2>Get In Touch</h2>
									<div class="text">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</div>
								</div>
								--}}
								<div class="row clearfix phone-email">
									<!--Info Block-->
									<div class="info-block col-md-6 col-sm-6 col-xs-12">
										<div class="info-inner">
											<div class="icon-box">
												<span class="icon flaticon-mail"></span>
											</div>
											<h3>Email Address</h3>
											<div class="text">{!! config('constants.COMPANY_EMAIL') !!}</div>
										</div>
									</div>
									<!--Info Block-->
									<div class="info-block col-md-6 col-sm-6 col-xs-12 telephone-block">
										<div class="info-inner">
											<div class="icon-box">
												<span class="icon flaticon-telephone"></span>
											</div>
											<h3>Contact</h3>
											<div class="text">(781) 244-9471 &nbsp; or &nbsp; (617) 461-7385</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--End Contact Info Section-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="elm row">
		<div class="row-container">
			<div class="wrap-columns">
				<div class="elm col-sm-12 column col-sm-12">
					<div class="col-container">
						<!--Appointment Section-->
						<section class="contact-section">
							<div class="auto-container">
								<div class="row clearfix">
									<!--Form Column-->
									<div class="form-column col-md-8 col-sm-12 col-xs-12">
										<div class="inner-column">
											<!-- Default Form / Contact Form -->
											<div class="default-form">
												<div class="row clearfix">
													<div class="error-message">
														{!! Form::alertMessages() !!}
													</div>
												</div>
												<div class="screen-reader-response"></div>
												{!! Form::open(['id' => 'contact-form', 'route' => 'contact-us', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
													<div class="row clearfix">
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('firstname', '', ['class' => 'form-control text', 'placeholder' => 'First name']) !!}
																{!! Form::errorBackend('firstname', $errors) !!}
															</span>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('lastname', '', ['class' => 'form-control text', 'placeholder' => 'Last name']) !!}
																{!! Form::errorBackend('lastname', $errors) !!}
															</span>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::email('email', '', ['class' => 'form-control email', 'placeholder' => 'Email']) !!}
																{!! Form::errorBackend('email', $errors) !!}
															</span>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('phone', '', ['class' => 'form-control text phone phoneOnly', 'placeholder' => 'Phone number']) !!}
																{!! Form::errorBackend('phone', $errors) !!}
															</span>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::text('subject', '', ['class' => 'form-control text', 'placeholder' => 'Subject']) !!}
																{!! Form::errorBackend('subject', $errors) !!}
															</span>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
															<span class="form-control-wrap">
																{!! Form::textarea('text', '', ['class' => 'form-control textarea', 'placeholder' => 'Message']) !!}
																{!! Form::errorBackend('text', $errors) !!}
															</span>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
															{!! Form::button('<i class="fa fa-send-o"></i> ' . Lang::get('html.btn.send'), ['type' => 'submit', 'class' => 'submit theme-btn btn-style']) !!}
														</div>
													</div>
													<div class="response-output display-none"></div>
												{!! Form::close() !!}

											</div>
											<!--End Default Form -->
										</div>
									</div>
									<!--Image Column-->
									<div class="image-column col-md-4 col-sm-12 col-xs-12">
										<div class="image">
											<img src="{!! asset('images/background/image-03.png') !!}" alt="" />
										</div>
									</div>
									<!--End Image Column-->
								</div>
							</div>
						</section>
						<!--End Appointment Section-->
					</div>
				</div>
			</div>
		</div>
	</section>

@stop
