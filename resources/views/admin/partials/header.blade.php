
<header class="main-header">
    <!-- Logo -->
    <a href="{!! url(config('adminlte.dashboard_url', 'home')) !!}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{!! config('adminlte.logo_mini') !!}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{!! config('adminlte.logo') !!}</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">{!! trans('adminlte::adminlte.toggle_navigation') !!}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{--
                <li class="dropdown language-menu">
                    <a href="#" class="dropdown-toggle text-uppercase" data-toggle="dropdown"><img src="{!! asset('images/icons/flag/' . app()->getLocale() . '.png') !!}" alt="" /> {!! app()->getLocale() !!}</a></a>
                    <ul class="dropdown-menu">
                        <li><a href="{!! url('locale', 'en') !!}"><img src="{!! asset('images/icons/flag/en.png') !!}" alt="" /> EN </a></li>
                        <li><a href="{!! url('locale', 'pt-br') !!}"><img src="{!! asset('images/icons/flag/pt-br.png') !!}" alt="" /> PT-BR </a></li>
                    </ul>
                </li>
                --}}
                <li class="log-out">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off"></i> {!! trans('adminlte::adminlte.log_out') !!}
                    </a>
                    <form id="logout-form" action="{!! url(config('adminlte.logout_url', 'auth/logout')) !!}" method="POST" style="display: none;">
                        {!! csrf_field() !!}
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
