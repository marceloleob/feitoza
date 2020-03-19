<?php

namespace App\Models;

use Exception;
use App\Services\Filter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class Base extends Model
{
	/**
	 * Como padrao seta que nenhuma tabela tera controle de insert e update
	 *
	 * @var string
	 */
	public $timestamps = false;

	/**
	 * Metodo de filtro hidratando os fields
	 *
	 * @param  array  $data
	 * @return Library\Filters
	 */
	public static function filter(array $data = [])
	{
		return Filter::make($data, static::$filters);
	}

	/**
	 * Metodo de validacao para os fields
	 *
	 * @param  array  $data
	 * @return Illuminate\Support\Facades\Validator
	 */
	public static function validate($data)
	{
		return Validator::make($data, static::$validations);
	}

	/**
	 * Salva ou atualiza um modelo
	 *
	 * @param  array  $data
	 * @return $this
	 */
	public static function store(array $data = [])
	{
        // inicia o acoplamento de uma transacao
        DB::beginTransaction();

        // define a acao
        $action = 'created';
        // verifica qual acao
        if (!empty($data['id'])) {
            // define a acao
            $action = 'updated';
            // recupera a entidade
            $entity = self::find($data['id']);
            // realiza o update
            $entity->update($data);

        } else {
            // realiza o save e retorna o objeto
            $entity = self::create($data);
        }

        // verifica se atualizou
        if (!$entity instanceof self) {
            // descarta a transacao
            DB::rollback();
            // levanta excecao de update
            throw new Exception(Lang::get('messages.' . $action . '.error'));
        }

        // efetiva a transacao
        DB::commit();
        // retorna sucesso
        return $entity;
	}
}
