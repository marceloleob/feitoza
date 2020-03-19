
<!-- Main Header-->
<header class="main-header">

	<!--Header-Upper-->
	<div class="header-upper">
		<div class="auto-container clearfix">
			<div class="pull-left logo-outer">
				<div class="logo">
					<a href="{!! route('home') !!}" title="Home">
						<img src="{!! asset('images/logo.png') !!}" class="logo" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}">
					</a>
				</div>
			</div>
			<div class="auto-container pull-right upper-right clearfix">
				<!--Info Box-->
				<div class="upper-column info-box">
					<div class="icon-box"><span class="flaticon-location-pin"></span></div>
					<ul>
						<li><span class="center">Palm Beach County</span> <span class="center">and</span> <span class="center">Surrounding Areas</span></li>
					</ul>
				</div>
				<!--Info Box-->
				<div class="upper-column info-box">
					<div class="icon-box">
						<span class="flaticon-alarm-clock-outline"></span>
					</div>
					<ul>
						<li>Monday - Saturday <br /> 7:00 AM - 8:00 PM <br /> Sunday Closed</li>
					</ul>
				</div>
				<!--Info Box-->
				<div class="upper-column info-box">
					<div class="icon-box">
						<span class="flaticon-telephone"></span>
					</div>
					<ul>
						<li>Contact <br /> (781) 244-9471 <br /> (617) 461-7385</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--End Header Upper-->

	<!--Header Lower-->
	<div class="header-lower">
		<div class="auto-container">
			<!--Nav Outer-->
			<div class="nav-outer border clearfix">
				<div class="upper-bg-border"></div>
				<!-- Main Menu -->
				<nav class="main-menu">
					@include('site.partials.menu')
				</nav>
				<!-- Main Menu End-->
			</div>
			<!--End Nav Outer-->
		</div>
	</div>
	<!--End Header Lower-->
</header>
<!--End Main Header -->
