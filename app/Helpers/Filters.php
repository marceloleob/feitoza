<?php

namespace App\Helpers;

class Filters
{
	/**
	 * Formata numeros decimais
	 *
	 * @param string $value
	 * @return number_format
	 */
	public static function amount($value)
	{
		// verifica se veio valor
		if (!empty($value)) {
			// verifica se tem virgula
			if (strpos($value, ',') !== false) {
				// hidrata para entrar no BD
				return str_replace(',', '.', $value);
			} else {
				// hidrata para renderizar na VIEW
				return number_format($value, 2, ',', '.');
			}
		}

		return '0,00';
	}

	/**
	 * Inverte uma data independente do formato que for passado
	 *
	 * @param string $value
	 * @return string
	 */
	public static function dateformat($value = null)
	{
		// verifica se nao foi informada a data
		if (empty($value)) {
			return null;
		}
		// retorna a data formatada
		return implode('/', array_reverse(preg_split("[/.-]", $value)));
	}

	/**
	 * Formata o telefone colocando parenteses
	 *
	 * @param string
	 * @return string
	 */
	public static function phoneformat($phone = null)
	{
		// recupera o ddd
		$ddd    = substr($phone, 0, 2);
		// recupera o numero
		$numero = substr($phone, 2);
		// verifica o tamanho do numero
		if (strlen($numero) == 9) {
			// quantidade de numeros no prefixo
			$qtde = 5;
		} else {
			// quantidade de numeros no prefixo
			$qtde = 4;
		}

		// separa o numero
		$prefixo = substr($numero, 0, $qtde);
		$sufixo  = substr($numero, $qtde);
		// retorna o telefone formatado
		return '(' . $ddd . ') ' . $prefixo . '-' . $sufixo;
	}

	/**
	 * Formata o CEP
	 *
	 * @param string $value
	 * @return void
	 */
	public static function zipcode($value)
	{
		// separa o numero
		$prefixo = substr($value, 0, 5);
		$sufixo  = substr($value, 5);
		// retorna o cep formatado
		return $prefixo . '-' . $sufixo;
	}
}
