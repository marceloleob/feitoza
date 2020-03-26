<?php

namespace App\Filters;

use Waavi\Sanitizer\Contracts\Filter;

class Nullable implements Filter
{
    /**
     *  Formata dinheiro removendo a moeda e retornando um float
     *
     *  @param  string  $value
     *  @return int
     */
    public function apply($value, $options = [])
    {
        if (empty($value) || $value == '') {
            return null;
        }

        return (int) $value;
    }
}
