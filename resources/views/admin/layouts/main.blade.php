<!DOCTYPE html>
<html lang="{{ $locale ?? 'en' }}">

@include('admin.partials.head')

<body class="skin-blue sidebar-mini" cz-shortcut-listen="true" style="height: auto; min-height: 100%;">

	<div class="wrapper">

		{{-- Main Header --}}
		@include('admin.partials.header')

		{{-- Menu --}}
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					@each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
				</ul>
			</section>
		</aside>
		{{-- End Menu --}}

		{{-- Content Wrapper --}}
		<div class="content-wrapper">
			<section class="content-header">
				<h1> @yield('title-page') </h1>
			</section>
			<section class="content">
				@yield('content')
			</section>
		</div>
		{{-- End Content Wrapper --}}

	</div>

	{{-- Scripts --}}
	@include('admin.partials.scripts')

</body>
</html>
