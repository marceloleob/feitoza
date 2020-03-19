
<footer class="main-footer">
	<!--Upper Box-->
	<div class="upper-box">
		<div class="auto-container">
			<div class="row clearfix">
				<!--Footer Info Box-->
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
				<!--Footer Info Box-->
				<div class="footer-info-box col-md-6 col-sm-6 col-xs-12">
					<div class="info-inner">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-telephone"></span>
							</div>
							<div class="text-label">Contact</div>
							<div class="text-info">
								<span class="phone">(781) 244-9471</span> <span class="phone-or">&nbsp; or &nbsp;</span> <span class="phone">(617) 461-7385</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Widgets Section-->
	<div class="widgets-section">
		<div class="auto-container">
			<div class="widgets-inner-container">
				<!--Cartoon Image-->
				<div class="cartoon-image">
					<img src="{!! asset('images/background/mascot.png') !!}" alt="" width="195" />
				</div>
				<div class="row clearfix">
					<div class="footer-column col-md-5 col-sm-5 col-xs-12">
						<div class="footer-widget footer-logo">
							<!--Footer Column-->
							<div class="logo-widget">
								<div class="logo">
									<img src="{!! asset('images/logo-footer.png') !!}" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}" />
								</div>
								<ul class="social-icon">
									<li><a href="https://www.facebook.com/bestwayimprovements/" target="_blank" title="Facebook"><span class="fab fa-facebook-f fa-lg"></span></a></li>
									<li><a href="https://www.instagram.com/bestwayimprovements/" target="_blank" title="Instagram"><span class="fab fa-instagram fa-lg"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="footer-column col-md-3 col-sm-3 col-xs-12">
						<div class="footer-widget footer-quick-links">
							<h2>Quick Links</h2>
							<ul class="list">
								<li><a href="{!! url('home') !!}">Home</a></li>
								<li><a href="{!! url('services/general-services') !!}">Image Gallery</a></li>
								<li><a href="{!! url('testimonials') !!}">Testimonials</a></li>
								<li><a href="{!! url('contact-us') !!}">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-column col-md-4 col-sm-4 col-xs-12">
						<div class="footer-widget footer-services">
							<!-- Services Cat List -->
							<div class="links-widget">
								<h2>Services</h2>
								<div class="widget-content">
									<ul class="list">
										<li>Commercial and Residential Painting</li>
										<li>Interior and Exterior Painting</li>
										<li>Kitchen Cabinet Painting</li>
										<li>Staining and Varnishing</li>
										<li>Pressure Washing</li>
										<li>Wallpaper Installation and Removal</li>
										<li>Carpentry</li>
										<li>Tile Installation</li>
										<li>Demolition</li>
										<li>Cleaning Services</li>
										<li>and more!</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Footer Bottom-->
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
