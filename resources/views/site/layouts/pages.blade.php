<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lte IE 8]> <html class="oldie" lang="pt-br"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en-US"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">

@include('site.partials.head')

<body class="page-template page css-system">

<div class="page-wrapper">

	<!-- Main Header-->
		@include('site.partials.header')
	<!--End Main Header -->

	<!--Breadcrumb-->
		{{--@include('site.partials.breadcrumb')--}}
	<!--End Breadcrumb-->

	{{-- renderiza o conteudo --}}
	@yield('content')

	<div class="clearfix"></div>

	<!--Main Footer-->
	@include('site.partials.footer')
	<!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

@include('site.partials.scripts')

</body>
</html>
