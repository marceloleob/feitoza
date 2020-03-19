
<section class="breadcrumb-section">
	<div class="auto-container">
		<h1>@yield('title-page')</h1>
		<ul class="page-breadcrumb">
			<li><a href="{!! url('home') !!}">Home</a></li>
			@if ($pageCurrent == 'services')
			<li>Services</li>
			@endif
			<li><a href="#" class="scroll-to-down scroll-to-target" data-target="section" id="breadcrumb">@yield('title-page')</a></li>
		</ul>
	</div>
</section>
