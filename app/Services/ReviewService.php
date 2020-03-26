<?php

namespace App\Services;

use App\Models\Review;
use App\Services\BaseService;
use Exception;

class ReviewService extends BaseService
{
    /**
     * Monta as opcoes do select box
     *
     * @return array
     */
    public static function options()
    {
        return Review::orderBy('name', 'ASC')
            ->where('status', '=', config('constants.ACTIVE'))
            ->get();
    }

    /**
     * Monta a lista com paginacao
     *
     * @return array
     */
    public static function list($request)
    {
        // retorna a query para a busca do grid
        $query = Review::orderBy('name', 'ASC');

        // verifica se buscou algum item especifico
        if (!empty($request['search'])) {
            $query->where('name', 'LIKE', '%' . $request['search'] . '%');
        }

        // cria uma collection com pagination para montar o grid
        parent::handlePagination($query);
        // efetua o tratamento no collection
        static::customCollection();

        return [
            'data'     => parent::$collection,
            'paginate' => parent::$paginate,
        ];
    }

    /**
     * Retorna os dados referente a este modelo
     *
     * @param integer $id
     * @return Review
     */
    public static function find($id = null)
    {
        //verifica se foi informado o id
        if (empty($id)) {
            return new Review;
        }

        return Review::find($id)->first();
    }

    /**
     * Altera o status do registro
     *
     * @param int $id
     * @return array
     */
    public static function toggleStatus($id)
    {
        try {
            // executa a acao direto do Model
            $entity = Review::toggleStatus($id);
            // retorna a entidade criada ou atualizada
            return [
                'success'   => 'O reivew "' . $entity->name . '" foi ' . (($entity->status == true) ? 'ativado' : 'desativado!'),
                'exception' => '',
            ];
        } catch (Exception $exception) {
            // retorna a entidade criada ou atualizada
            return [
                'danger'    => 'Erro ao ativar/desativar o review ' . $id,
                'exception' => $exception,
            ];
        }
    }

    /**
     * Save or Update the entity
     *
     * @param array $data
     * @return array
     */
    public static function store($data = [])
    {
        try {
            // save or update
            $entity = Review::store($data);
            // retorna a entidade criada ou atualizada
            return [
                'success' => 'Cadastrado com sucesso!',
                'entity'  => $entity,
            ];
        } catch (Exception $exception) {
            // retorna a entidade criada ou atualizada
            return [
                'danger' => 'Erro ao ' . (isset($data['id']) ? 'atualizar' : 'cadastrar') . ', tente novamente!',
                'error'  => $exception,
            ];
        }
    }
}
