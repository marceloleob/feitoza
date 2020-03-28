<head>
    {{-- GOOGLE ANALYTICS --}}
    @include('site.partials.analytics')

    <meta charset="UTF-8" />
    {{-- RESPONSIVE TAG --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>{!! Config::get('app.name') !!}</title>

    {{-- METAS TAG --}}
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="{!! config('constants.DEVELOPER_NAME') . ' <' . config('constants.DEVELOPER_EMAIL') . '>' !!}" />
	<meta name="copyright" content="{!! config('constants.COMPANY_NAME') !!}" />
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    <meta name="robots" content="index, follow" />

    {{-- ICO --}}
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" />
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />

	{{-- RESET CSS --}}
	{!! Html::style('css/reset.css') !!}
    {{-- CSS LIBS --}}
	{!! Html::style('css/libs/bootstrap.min.css') !!}
	{!! Html::style('vendor/fontawesome-free/css/all.min.css') !!}
	{!! Html::style('vendor/flaticon/all.css') !!}
    {!! Html::style('vendor/owl-carousel/dist/assets/owl.carousel.min.css') !!}
	{{-- Google APIs - Fonts --}}
	{!! Html::style('vendor/font/google-latin-ext.css') !!}
    {{-- CSS CUSTOM --}}
    {!! Html::style('css/site/responsive.css') !!}
    {!! Html::style('css/site/main.css') !!}
    {!! Html::style('css/forms.css') !!}
    {{-- CSS DEVICE --}}
	@if (!empty($device))
		{!! Html::style('css/site/' . $device . '/main.css') !!}
    @endif
    {{-- CSS PAGE --}}
    @yield('css-custom')
</head>
