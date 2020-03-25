<!DOCTYPE html>
<html lang="{!! $locale !!}">

@include('admin.partials.head')

<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        {{-- HEADER --}}
        <div class="app-header header-shadow">
            {{-- <div class="app-header header-shadow bg-danger header-text-light"> --}}
            {{-- <div class="app-header header-shadow bg-alternate header-text-light"> --}}
            @include('admin.partials.header')
        </div>

        <div class="app-main">
            {{-- MENU --}}
            <div class="app-sidebar sidebar-shadow">
                @include('admin.partials.menu')
            </div>

            <div class="app-main__outer">
                {{-- CONTENT --}}
                <div class="app-main__inner">
                    @yield('content')
                </div>
                {{-- FOOTER --}}
                <div class="app-wrapper-footer">
                    @include('admin.partials.footer')
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPTS --}}
    @include('admin.partials.scripts')

</body>
</html>
