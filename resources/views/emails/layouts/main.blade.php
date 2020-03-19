<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lte IE 8]> <html class="oldie" lang="pt-br"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en-US"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{!! Config::get('app.name') !!}</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Content-Type" content="text/html" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	@include('emails.partials.style')
</head>

<body>

<span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>


<table border="0" cellpadding="0" cellspacing="0" width="100%" class="body" role="presentation">
	<!-- PRIMEIRA LINHA EM BRANCO -->
	<tr>
		<td height="50" colspan="3"></td>
	</tr>
	<!-- SEGUNDA LINHA COM A LOGO -->
	<tr>
		<td height="100" width="50%" align="center" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td height="25" valign="middle">&nbsp;</td>
				</tr>
				<tr>
					<td height="50" valign="middle" class="bgcolor"></td>
				</tr>
				<tr>
					<td height="25" valign="middle">&nbsp;</td>
				</tr>
			</table>
		</td>
		<td height="100" align="center" valign="top">
			<table border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td width="20">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="25" valign="middle">&nbsp;</td>
							</tr>
							<tr>
								<td height="50" valign="middle" class="bgcolor"></td>
							</tr>
							<tr>
								<td height="25" valign="middle">&nbsp;</td>
							</tr>
						</table>
					</td>
					<td width="250">
						<img src="{!! asset('images/logo.png') !!}" class="logo" alt="{!! Config::get('app.name') !!}" title="{!! Config::get('app.name') !!}">
					</td>
					<td height="100">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="25" valign="middle">&nbsp;</td>
							</tr>
							<tr>
								<td height="50" valign="middle" class="bgcolor"></td>
							</tr>
							<tr>
								<td height="25" valign="middle">&nbsp;</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td height="100" width="50%" align="center" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td height="25" valign="middle">&nbsp;</td>
				</tr>
				<tr>
					<td height="50" valign="middle" class="bgcolor"></td>
				</tr>
				<tr>
					<td height="25" valign="middle">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
	<!-- TERCEIRA LINHA EM BRANCO -->
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<!-- QUARTA LINHA COM O CONTEUDO -->
	<tr>
		<td>&nbsp;</td>
		<td height="100%" align="center" valign="top" class="container">
			<div class="content">
				<!-- CONTEUDO -->
				<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" class="main">
					<tr>
						<td class="wrapper">
							@yield('content')
						</td>
					</tr>
				</table>
				<!-- FIM CONTEUDO -->
			</div>
		</td>
		<td>&nbsp;</td>
	</tr>
	<!-- QUINTA LINHA EM BRANCO -->
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<!-- SEXTA LINHA COM O FOOTER -->
	<tr>
		<td>&nbsp;</td>
		<td class="bgcolor">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="pre-footer">
				<tr>
					<td width="75%">
						&reg; {!! Config::get('app.name') !!}, {!! date('Y') !!}
					</td>
					<td class="facebook">
						<a href="https://www.facebook.com/bestwayimprovements/" title="Facebook" target="_blank">
							<img src="{!! asset('images/icons/fb-24.png') !!}" />
						</a>
					</td>
				</tr>
			</table>
		</td>
		<td>&nbsp;</td>
	</tr>
	<!-- SETIMA LINHA EM BRANCO -->
	<tr>
		<td height="50" colspan="3"></td>
	</tr>
</table>

</body>
</html>
