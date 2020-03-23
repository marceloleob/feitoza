
<header class="main-header">
    {{-- Logo --}}
    <a href="{!! route('dashboard') !!}" class="logo">
        {{-- mini logo for sidebar mini 50x50 pixels --}}
        <span class="logo-mini">{!! config('adminlte.logo_mini') !!}</span>
        {{-- logo for regular state and mobile devices --}}
        <span class="logo-lg">{!! config('adminlte.logo') !!}</span>
    </a>
    {{-- Header Navbar --}}
    <nav class="navbar navbar-static-top" role="navigation">
        {{-- Sidebar toggle button--}}
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">{!! trans('adminlte::adminlte.toggle_navigation') !!}</span>
        </a>
        {{-- Navbar Right Menu --}}
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-block btn-danger">
                        <i class="fas fa-sign-out-alt"></i> Sair
                    </a>
                    <form id="logout-form" action="{!! url(config('adminlte.logout_url', 'auth/logout')) !!}" method="POST" style="display: none;">
                        {!! csrf_field() !!}
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
