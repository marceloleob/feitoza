
<div class="app-header__logo">
	<div class="logo-src">{!! Config::get('app.name') !!}</div>
	<div class="header__pane ml-auto">
		<div>
			<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>
	</div>
</div>
<div class="app-header__mobile-menu">
	<div>
		<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
	</div>
</div>
<div class="app-header__menu">
	<span>
		<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
			<span class="btn-icon-wrapper">
				<i class="fa fa-ellipsis-v fa-w-6"></i>
			</span>
		</button>
	</span>
</div>
<div class="scrollbar-sidebar">
	<div class="app-sidebar__inner">
		<ul id="metismenu" class="vertical-nav-menu">

			<li class="app-sidebar__heading">&nbsp;</li>
			<li>
				<a href="{!! route('dashboard') !!}" class="{!! (request()->is('admin')) ? 'mm-active' : '' !!}"><i class="metismenu-icon fas fa-chart-line"></i> Início</a>
			</li>

			<li class="app-sidebar__heading">GERENCIALMENTO</li>
			<li>
				<a href="{!! route('gallery.list') !!}" class="{!! (request()->is('admin/galleries')) ? 'mm-active' : '' !!}"><i class="metismenu-icon fas fa-palette"></i> Galeria</a>
			</li>
			<li>
				<a href="{!! route('picture.list') !!}" class="{!! (request()->is('admin/pictures')) ? 'mm-active' : '' !!}"><i class="metismenu-icon far fa-images"></i> Imagens</a>
			</li>
			<li>
				<a href="{!! route('reviews.list') !!}" class="{!! (request()->is('admin/reviews')) ? 'mm-active' : '' !!}"><i class="metismenu-icon fas fa-star"></i> Reviews</a>
			</li>

            <li class="app-sidebar__heading">SISTEMA</li>
			<li>
				<a href="javascript:void(0);" class="logout"><i class="metismenu-icon fas fa-sign-out-alt"></i> Sair</a>
			</li>
		</ul>
	</div>
</div>
