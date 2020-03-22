<?php

namespace App\Helpers;

use Collective\Html\FormBuilder;
use Illuminate\Support\Facades\Session;

class Macros extends FormBuilder
{
    /**
     * Macro para renderizar mensagens de retorno
     *
     * @param Collection $errors
     * @return void
     */
    public static function boxNotification($errors)
    {
        // verifica o tipo do erro
        if ($errors->any()) {
            return self::requestErrors($errors);
        }

        return self::flashMessage();
    }

    /**
     * Renderiza os erros retornados do request validate
     *
     * @param Collection $errors
     * @return HTML
     */
    public static function requestErrors($errors)
    {
        // seta os alertas
        $alerts = [];

        array_push($alerts, '<div class="feedback alert alert-danger fade in">');
        array_push($alerts, '    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
        array_push($alerts, '    <i class="fas fa-times-circle"></i> &nbsp; Erros encontrados: ');
        array_push($alerts, '    <ul>');
        foreach ($errors->all() as $error) {
            array_push($alerts, '        <li>' . $error . '</li>');
        }
        array_push($alerts, '    </ul>');
        array_push($alerts, '</div>');
        // retorna
        return implode('', $alerts);
    }

    /**
     * Renderiza os erros gravados em sessao
     *
     * @return HTML
     */
    public static function flashMessage()
    {
        // seta os alertas
        $alerts = [];
        // seta os tipos
        $types = [
            'success' => 'fa-check',
            'error'   => 'fa-times-circle',
            'warning' => 'fa-exclamation-triangle',
            'info'    => 'fa-info-circle'
        ];

        foreach ($types as $type => $ico) {
            // verifica  se existe algum tipo na sessao
            if (Session::has($type)) {
                // recupera o tipo
                array_push($alerts, '<div class="feedback alert alert-' . (($type === 'error') ? 'danger' : $type) . ' fade in">');
                array_push($alerts, '    <i class="fas ' . $ico . '"></i> &nbsp; ' . Session::get($type));
                array_push($alerts, '    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
                array_push($alerts, '</div>');
            }
        }
        // retorna
        return implode('', $alerts);
    }

    /**
     * Mostra os erros dos campos do formulario
     *
     * @var name string
     * @var error object
     * @return html
     */
    public static function notification($name, $errors)
    {
        $html  = '<span for="' . $name . '" generated="true" class="help-block">';
        $html .= '    <i class="fa fa-times fa-fw"></i> :message';
        $html .= '</span>';

        return $errors->first($name, $html);
    }
}
