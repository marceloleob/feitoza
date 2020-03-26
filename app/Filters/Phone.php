<?php

namespace App\Filters;

use Waavi\Sanitizer\Contracts\Filter;

class Phone implements Filter
{
    /**
     *  Formata o telefone colocando parenteses
     *
     *  @param  string  $value
     *  @return string
     */
    public function apply($value, $options = [])
    {
        // verifica se nao foi informado nenhum telefone
        if (empty($value)) {
            return '';
        }
		// recupera o ddd
		$ddd    = substr($value, 0, 2);
		// recupera o numero
		$numero = substr($value, 2);
        // quantidade de numeros no prefixo
        $qtde   = 4;
		// verifica o tamanho do numero
		if (strlen($numero) == 9) {
			// quantidade de numeros no prefixo
			$qtde = 5;
		}
		// separa o numero
		$prefixo = substr($numero, 0, $qtde);
		$sufixo  = substr($numero, $qtde);
		// retorna o telefone formatado
		return '(' . $ddd . ') ' . $prefixo . '-' . $sufixo;
    }
}
