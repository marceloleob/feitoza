
{{-- Main Header --}}
<header class="main-header">

	{{-- Header-Upper --}}
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
				{{-- Info Box --}}
				<div class="upper-column info-box">
					<div class="icon-box"><span class="flaticon-location-pin"></span></div>
					<ul>
						<li>New England <br /> Rhode Island <br /> Connecticut</li>
					</ul>
				</div>
				{{-- Info Box --}}
				<div class="upper-column info-box">
					<div class="icon-box">
						<span class="flaticon-telephone"></span>
					</div>
					<ul>
						<li>Contact: <br /> (781) 366-8429</li>
					</ul>
				</div>
				{{-- Info Box --}}
				<div class="upper-column info-box">
					<div class="icon-box">
						<span class="flaticon-alarm-clock-outline"></span>
					</div>
					<ul>
						<li>Monday - Friday <br /> 7:00 AM - 8:00 PM <br /> Weekend Closed</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	{{-- End Header Upper --}}

	{{-- Header Lower --}}
	<div class="header-lower">
		<div class="auto-container">
			<div class="nav-outer border clearfix">
				<div class="upper-bg-border"></div>
				<nav class="main-menu">
					@include('site.partials.menu')
				</nav>
			</div>
		</div>
	</div>
	{{-- End Header Lower --}}
</header>
{{-- End Main Header  --}}
