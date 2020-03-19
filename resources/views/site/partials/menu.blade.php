

<div class="navbar-header">
	<!-- Toggle Button -->
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
</div>

<div class="navbar-collapse collapse clearfix">
	<ul class="navigation clearfix">
		<li class="menu-item {!! ($current == 'home') ? 'current' : '' !!}">
			<a href="{!! url('home') !!}" title="Home">Home</a>
		</li>
		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children {!! ($current == 'service') ? 'current' : '' !!} dropdown">
			<a title="Services" href="#" class="hvr-underline-from-left1" aria-expanded="false" data-toggle="dropdown1" data-scroll data-options="easing: easeOutQuart">Image Gallery</a>
			<ul role="menu" class="submenu">
				{{-- @foreach ($menuService as $service) --}}
					<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Teste</a></li>
				{{-- @endforeach --}}
			</ul>
		</li>
		<li class="menu-item {!! ($current == 'testimonial') ? 'current' : '' !!}">
			<a href="{!! url('testimonials') !!}" title="Testimonials">Testimonials</a>
		</li>
		<li class="menu-item {!! ($current == 'about') ? 'current' : '' !!}">
			<a href="{!! url('about-us') !!}" title="About Us">About Us</a>
		</li>
		<li class="menu-item {!! ($current == 'contact') ? 'current' : '' !!}">
			<a href="{!! url('contact-us') !!}" title="Contact Us">Contact Us</a>
		</li>
	</ul>
</div>
