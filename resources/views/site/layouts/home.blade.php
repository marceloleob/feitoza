<!DOCTYPE html>
<html lang="{{ $locale ?? '' }}">

@include('site.partials.head')

<body class="page-template page css-system">

    <div class="page-wrapper">

        {{-- HEADER --}}
        @include('site.partials.header')
        {{-- CONTENT --}}
        @yield('content')
        <div class="clearfix"></div>
        {{-- FOOTER --}}
        @include('site.partials.footer')

    </div>

    {{-- Scroll to top --}}
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    @include('site.partials.scripts')

</body>
</html>
