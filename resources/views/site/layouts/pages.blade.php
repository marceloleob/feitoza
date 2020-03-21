<!DOCTYPE html>
<html lang="{{ $locale ?? 'en' }}">

@include('site.partials.head')

<body class="page-template page css-system">

    <div class="page-wrapper">
        {{-- HEADER --}}
        @include('site.partials.header')
        {{-- BREADCRUMB --}}
        @include('site.partials.breadcrumb')
        {{-- CONTENT --}}
        @yield('content')

        <div class="clearfix"></div>
        {{-- FOOTER --}}
        @include('site.partials.footer')
    </div>

    {{-- Scroll to top --}}
    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fas fa-arrow-up"></i></div>

    @include('site.partials.scripts')

</body>
</html>
