<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;

class ReviewRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @var boolean
     */
    public $authorize = true;

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'   => 'digit',
        'name' => 'trim|escape',
        'link' => 'trim|escape',
        'text' => 'trim|strip_tags',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'   => '',
        'name' => 'required|min:3|max:100',
        'link' => 'required|min:5|max:800',
        'text' => 'required|min:5|max:5000',
    ];
}
