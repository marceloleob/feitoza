<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;

class GalleryRequest extends BaseRequest
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
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'   => '',
        'name' => 'required|min:5|max:100',
    ];
}
