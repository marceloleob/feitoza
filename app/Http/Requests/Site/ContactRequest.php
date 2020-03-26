<?php

namespace App\Http\Requests\Site;

use App\Filters\Phone;
use App\Http\Requests\BaseFormRequest;

class ContactRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @var boolean
     */
    public $authorize = true;

    /**
     * Custom filter rules
     *
     * @var array
     */
    public static $customFilters = [
        'phone' => Phone::class,
    ];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'name'    => 'trim|capitalize|escape',
        'email'   => 'trim|lowercase',
        'phone'   => 'digit|phone',
        'subject' => 'trim',
        'text'    => 'trim',
        'read'    => 'cast:boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'name'    => 'required|min:2|max:100',
        'email'   => 'required|min:3|max:100|email',
        'phone'   => 'required',
        'subject' => 'required|min:2|max:100',
        'text'    => 'required|min:5|max:2000',
        'read'    => 'boolean',
    ];
}
