<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Waavi\Sanitizer\Laravel\SanitizesInput;

abstract class BaseRequest extends FormRequest
{
    use SanitizesInput;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @var boolean
     */
    public $authorize = false;

    /**
     * Armazena todas as validacoes
     *
     * @var array
     */
    public static $validations = [];

    /**
     * Armazena todos os filtros
     *
     * @var array
     */
    public static $filters = [];

    /**
     * Armazena todos os filtros customizados
     *
     * @var array
     */
    public static $customFilters = [];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->authorize;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return static::$validations;
    }

    /**
     *  Filters to be applied to the input.
     *
     *  @return array
     */
    public function filters()
    {
        return static::$filters;
    }

    /**
     *  Custome filters to be applied to the input.
     *
     *  @return array
     */
    public function customFilters()
    {
        return static::$customFilters;
    }

    /**
     * Sobrescreve o metodo para forcar o sanitizer
     * For more sanitizer rule check https://github.com/Waavi/Sanitizer
     *
     * @return void
     */
    public function validateResolved()
    {
        $this->sanitize();

        parent::validateResolved();
    }
}
