<?php

namespace App\Models;

use App\Models\Base;

class Gallery extends Base
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
        'friendly',
        'status',
    ];

    /**
     * Get the pictures about this gallery.
     *
     */
    public function pictures()
    {
        return $this->hasMany('App\Models\Picture')->orderBy('name');
    }
}
