<!DOCTYPE html>
<html lang="{{ $locale ?? 'en' }}">

@include('admin.partials.head')

<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">

        {{-- Main Header --}}
        <header class="main-header">
		    @include('admin.partials.header')
        </header>

		{{-- Menu --}}
		<aside class="main-sidebar">
			{{-- <section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					@each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
				</ul>
            </section> --}}
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column {{config('adminlte.classes_sidebar_nav', '')}}" data-widget="treeview" role="menu" @if(config('adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{config('adminlte.sidebar_nav_animation_speed')}}" @endif @if(!config('adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
                        @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                    </ul>
                </nav>
            </div>
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
