<?php

namespace App\Filters;

use Waavi\Sanitizer\Contracts\Filter;

class Amount implements Filter
{
    /**
     *  Formata dinheiro removendo a moeda e retornando um float
     *
     *  @param  string  $value
     *  @return float
     */
    public function apply($value, $options = [])
    {
        // remove a sifra
        $amount = trim(str_replace('R$', '', $value));
        // verifica se foi informado algum valor
        if (empty($amount)) {
            return 0.00;
        }
        // retorna formatado
        return (float) str_replace(',', '.', str_replace('.', '', $amount));
    }
}
