<?php

namespace App\Models;

use App\Models\Base;

class Review extends Base
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'link',
        'text',
        'status',
    ];
}
