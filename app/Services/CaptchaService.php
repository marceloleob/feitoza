<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Support\Facades\App;

class CaptchaService extends BaseService
{
	/**
	 * Verifica no GOOGLE se o envio e valido
	 *
	 * @param string $recaptcha
	 * @return void
	 */
    public static function check($recaptcha)
    {
        $url  = 'https://www.google.com/recaptcha/api/siteverify';
        $test = [
            'secret'   => config('constants.CAPTCHA_SECRET_KEY'),
            'response' => $recaptcha
        ];
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($test)
            ]
        ];

        $context = stream_context_create($options);

        return json_decode(file_get_contents($url, false, $context));
    }
}
