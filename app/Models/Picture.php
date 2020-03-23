<?php

namespace App\Models;

use App\Models\Base;

class Picture extends Base
{
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'gallery_id',
		'name',
		'extension',
		'size',
		'position',
		'showhome',
		'status',
    ];

    /**
     * Get the gallery that owns the picture.
     *
     */
    public function gallery()
    {
        return $this->belongsTo('App\Models\Gallery');
    }
}
