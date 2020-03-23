
<footer class="main-footer">
	{{-- Upper Box --}}
	<div class="upper-box">
		<div class="auto-container">
			<div class="row clearfix">
				{{-- Footer Info Box --}}
				<div class="footer-info-box col-md-6 col-sm-6 col-xs-12">
					<div class="info-inner">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-envelope"></span>
							</div>
							<div class="text-label">Email</div>
							<div class="text-info">
								<span>{!! config('constants.COMPANY_EMAIL') !!}</span>
							</div>
						</div>
					</div>
				</div>
				{{-- Footer Info Box --}}
				<div class="footer-info-box col-md-6 col-sm-6 col-xs-12">
					<div class="info-inner">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-telephone"></span>
							</div>
							<div class="text-label">Contact</div>
							<div class="text-info">
								<span class="phone">(781) 366-8429 &nbsp; &nbsp; (Monday - Friday)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Widgets Section --}}
	<div class="widgets-section">
		<div class="auto-container">
			<div class="widgets-inner-container">
				{{-- Cartoon Image --}}
				<div class="cartoon-image">
					<img src="{!! asset('images/background/mascot.png') !!}" alt="" width="200" />
				</div>
				<div class="row clearfix">
					<div class="footer-column col-md-9 col-sm-5 col-xs-12">
						<div class="footer-widget footer-logo">
							{{-- Footer Column --}}
							<div class="logo-widget">
								<div class="logo">
									<img src="{!! asset('images/logo-footer.png') !!}" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}" />
								</div>
							</div>
						</div>
					</div>
					<div class="footer-column col-md-3 col-sm-3 col-xs-12">
						<div class="footer-widget footer-quick-links">
							<h2>Quick Links</h2>
							<ul class="list">
								<li><a href="{!! route('home') !!}">Home</a></li>
								<li><a href="#">Image Gallery</a></li>
								<li><a href="{!! route('review') !!}">Reviews</a></li>
								<li><a href="{!! route('about') !!}">About Us</a></li>
								<li><a href="{!! route('contact') !!}">Contact Us</a></li>
                            </ul>
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/feitoza.wallpaper" target="_blank" title="Facebook"><i class="fab fa-facebook-f fa-sm"></i></a></li>
                                <li><a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram fa-sm"></i></a></li>
                                <li><a href="https://wa.me/17813668429" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp fa-sm"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Footer Bottom --}}
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					<div class="column col-md-12 col-sm-12 col-xs-12">
						<ul>
							<li><i class="far fa-copyright"></i> Copyright {!! date('Y') !!} {!! Config::get('app.name') !!}. All right reserved.</li>
							<li>Created by <a href="https://www.turnupweb.com" target="_blank">TurnUp Web</a>.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
