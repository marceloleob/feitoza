

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
			<a href="{!! route('home') !!}" title="Home">Home</a>
		</li>
		<li class="menu-item {!! ($current == 'gallery') ? 'current' : '' !!}">
			<a href="{!! route('gallery') !!}" title="Image Gallery">Image Gallery</a>
		</li>
		<li class="menu-item {!! ($current == 'reviews') ? 'current' : '' !!}">
			<a href="{!! route('review') !!}" title="Reviews">Reviews</a>
		</li>
		<li class="menu-item {!! ($current == 'about') ? 'current' : '' !!}">
			<a href="{!! route('about') !!}" title="About Us">About Us</a>
		</li>
		<li class="menu-item {!! ($current == 'contact') ? 'current' : '' !!}">
			<a href="{!! route('contact') !!}" title="Contact Us">Contact Us</a>
		</li>
	</ul>
</div>
