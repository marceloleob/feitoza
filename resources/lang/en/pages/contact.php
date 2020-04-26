<?php

use Illuminate\Support\Facades\Config;

return [

	/*
    |--------------------------------------------------------------------------
    | Contact - Translate (EN)
    |--------------------------------------------------------------------------
	*/

	'email'         => [
		'company'  => [
			'subject' => 'Email sent from website ' . Config::get('app.name'),
			// 'title'   => 'We received a message from the Site!',
			// 'name'    => 'Name',
			// 'email'   => 'E-mail',
			// 'phone'   => 'Phone',
			// 'subject' => 'Subject',
			// 'text'    => 'Message',
		],
		'customer' => [
			'subject' => Config::get('app.name') . ' received your email!',
			// 'title'   => 'Hi :name, how are you?',
			// 'msg01'   => 'Thank you for sending us your message!',
			// 'msg02'   => 'Soon we will contact you.',
		],
	],

	'feedback'      => [
		'success' => 'Your message has been sent successfully!',
		'error'   => 'Error sending your message, please try again in a few minutes.',
	],

];
