<?php

namespace App\Http\Requests\Admin;

use App\Filters\Amount;
use App\Http\Requests\BaseRequest;

class PictureRequest extends BaseRequest
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
        'amount' => Amount::class,
    ];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'         => 'digit',
        'gallery_id' => 'digit',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'         => 'integer',
        'gallery_id' => 'required|integer',
        'photo'      => 'required|image|mimes:jpeg,png,jpg|max:5000', // 2,000 KILOBYTES = 2 MEGABYTES
    ];
}
