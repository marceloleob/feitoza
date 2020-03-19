<?php

namespace App\Models;

use App\Models\Base;
use Illuminate\Support\Facades\Lang;

class Services extends Base
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
        'showhome',
        'status',
    ];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'       => 'digits',
        'name'     => 'trim',
        'friendly' => 'trim',
        'showhome' => 'boolean',
        'status'   => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'       => 'integer',
        'name'     => 'required|min:2|max:100',
        'friendly' => 'required|max:100',
        'showhome' => 'integer',
        'status'   => 'required|integer',
    ];

    /**
     * Casting new attribute (homepicture)
     *
     * @param string $value
     * @return string
     */
    public function getHomepictureAttribute($value)
    {
        return $value;
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setHomepictureAttribute($value)
    {
        $this->attributes['homepicture'] = $value;
    }

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
     * Assina varias PICTURES para cada SERVICE
     *
     * @return Pictures
     */
    public function pictures()
    {
        return $this->hasMany('App\Models\Pictures', 'service_id');
    }

	/**
	 * Monta um combobox
	 *
     * @param int $departament
	 * @return \Self
	 */
	public static function options()
	{
		// busca pelos registros no banco
		$options = self::orderBy('name', 'ASC')->pluck('name', 'id');

		// retorna o combobox pronto
		return $options->prepend(' -- ' . Lang::get('html.field.combo.select') . ' -- ', '');
    }

	/**
	 * Recupera os servicos
	 *
	 * @return \Self
	 */
	public static function get()
	{
		return self::orderBy('name', 'ASC')->get();
    }

    /**
     * Recupera os servicos que devem ser mostrados na home juntamente com suas imagens
     *
     * @return self
     */
    static function getHomePictures()
    {
        // recupera os servicos que devem mostrar na home
        $services = self::where('showhome', '=', 1)
            ->where('status', '=', config('constants.STATUS_ACTIVE'))
            ->orderBy('name', 'ASC')
            ->get();
        // percorre todos os servicos
        foreach ($services as $service) {
            // recupera as imagens de capa dos servicoes
            $service->setHomepictureAttribute(Pictures::getHomePictureByService($service));
        }
        // retorna os servicos com suas respectivas imagens
        return $services;
    }
}
