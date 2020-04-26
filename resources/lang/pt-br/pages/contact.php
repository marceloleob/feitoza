<?php

use Illuminate\Support\Facades\Config;

return [

	/*
    |--------------------------------------------------------------------------
    | Contact - Translate (PT-BR)
    |--------------------------------------------------------------------------
	*/

	'email'         => [
		'company'  => [
			'subject' => 'Email do site ' . Config::get('app.name'),
			'title'   => 'Nós recebemos uma mensagem do Site!',
			'name'    => 'Nome',
			'email'   => 'E-mail',
			'phone'   => 'Telefone',
			'subject' => 'Título',
			'text'    => 'Mensagem',
		],
		'customer' => [
			'subject' => Config::get('app.name') . ' recebeu seu e-mail!',
			'title'   => 'Oi :name, tudo bem?',
			'msg01'   => 'Obrigado por nos enviar sua mensagem!',
			'msg02'   => 'Em breve vamos entrar em contato com você.',
		],
	],

	'feedback'      => [
		'success' => 'Sua mensagem foi enviada com sucesso!',
		'error'   => 'Erro ao enviar sua mensagem, tente novamente em alguns minutos.',
	],
];
