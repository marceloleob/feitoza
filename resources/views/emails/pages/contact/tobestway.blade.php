@extends('emails.layouts.main')

@section('content')

	<table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
		<tr>
			<td>
				<h2>You have received a contact email from the site!</h2>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<p>Complete Name: {!! $firstname !!} {!! $lastname !!}</p>
				<p>Email: {!! $email !!}</p>
				<p>Phone: {!! $phone !!}</p>
				<p>Subject: {!! $subject !!}</p>
				<p>{!! nl2br($text) !!}</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>

@stop
