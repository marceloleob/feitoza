<?php

namespace App\Models;

use App\Models\Base;

class Pictures extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'service_id',
        'photo',
        'extension',
        'size',
        'position',
        'showhome',
        'status',
    ];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'         => 'digits',
        'service_id' => 'digits',
        'photo'      => 'trim',
        'extension'  => 'trim',
        'size'       => 'amount',
        'position'   => 'trim',
        'showhome'   => 'boolean',
        'status'     => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'         => 'integer',
        'service_id' => 'required|integer',
        'photo'      => 'required|image|mimes:jpeg,png,jpg|max:2000', // 2,000 KILOBYTES = 2 MEGABYTES
        'extension'  => 'max:5',
        'size'       => 'regex:/^\d*(\.\d{2})?$/',
        'position'   => 'in:V,H',
        'showhome'   => 'integer',
        'status'     => 'integer',
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

    /**
     * Assina um SERVICE para cada PICTURE
     *
     * @return Services
     */
    public function services()
    {
        return $this->belongsTo('App\Models\Services', 'service_id');
    }

    /**
     * Recupera a imagem da home referente ao servico passado
     *
     * @param Service $service
     * @return self
     */
    static function getHomePictureByService($service)
    {
        // recupera a imagem que deve mostrar na home referente ao servico passado
        $picture = self::where('service_id', '=', $service->id)
            ->where('showhome', '=', 1)
            ->orderBy('id', 'DESC')
            ->first();
        // verifica se encontrou
        if (!empty($picture)) {
            // retorna a imagem
            return config('constants.PICTURES_PATH') . $service->friendly . '/' . $picture->photo;
        }
        // retorna not-available
        return config('constants.PICTURES_NOTAVAILABLE');
    }
}
