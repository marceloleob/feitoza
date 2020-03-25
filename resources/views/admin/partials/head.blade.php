<head>
	<meta charset="UTF-8" />
	{{-- RESPONSIVE TAG --}}
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

	<title>Admin - {!! Config::get('app.name') !!}</title>

	{{-- METAS TAG --}}
	<meta name="author" content="{!! config('constants.DEVELOPER_NAME') . ' <' . config('constants.DEVELOPER_EMAIL') . '>' !!}" />
	<meta name="copyright" content="{!! config('constants.COMPANY_NAME') !!}" />
	<meta name="csrf-token" content="{!! csrf_token() !!}" />
	<meta name="robots" content="noindex, nofollow" />

	{{-- ICO --}}
	<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" />
	<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />
	<link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />

	{{-- RESET CSS --}}
	{!! Html::style('css/reset.css') !!}
	{{-- FONTS --}}
	{!! Html::style('https://fonts.googleapis.com/css?family=Nunito') !!}
	{{-- CSS LIBS --}}
	{{-- {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!} --}}
	{!! Html::style('vendor/fontawesome-free/css/all.min.css') !!}
	{!! Html::style('vendor/metismenu/metisMenu.min.css') !!}
	{!! Html::style('css/admin/animate.css') !!}
	{!! Html::style('css/admin/hamburger.css') !!}
	{!! Html::style('css/admin/architect-ui.css') !!}
	{{-- CSS CUSTOM --}}
	{!! Html::style('css/admin/custom.css') !!}
	{!! Html::style('css/forms.css') !!}
	@yield('css-custom')
</head>
