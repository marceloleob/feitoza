<?php

namespace App\Models;

use App\Models\Base;

class Testimonials extends Base
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
        'text',
        'status',
    ];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'     => 'digits',
        'name'   => 'trim',
        'text'   => 'trim',
        'status' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'     => 'integer',
        'name'   => 'required|min:3|max:100',
        'text'   => 'required|min:3|max:2000',
        'status' => 'required|integer',
    ];

	/**
	 * Store a newly created resource in storage.
	 *
     * @param  array $data
	 * @return Response
	 */
	public static function store(array $data = [])
	{
        // salva ou atualiza
        return parent::store($data);
    }
}
