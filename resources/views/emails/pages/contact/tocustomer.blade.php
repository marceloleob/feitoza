@extends('emails.layouts.main')

@section('content')

	<table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
		<tr>
			<td>
				<h2>{!! Config::get('app.name') !!}</h2>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<p>Hi {!! $firstname !!}, we received your email.</p>
				<p>Thank you for sending us your message!</p>
				<p>We will contact you soon.</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>

@stop
