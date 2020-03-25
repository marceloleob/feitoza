<?php

namespace App\Services;

use App\Models\Picture;
use App\Services\BaseService;
use Exception;

class PictureService extends BaseService
{
    /**
     * Monta as opcoes do select box
     *
     * @return array
     */
    public static function options()
    {
        return Picture::orderBy('name', 'ASC')
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
        $query = Picture::with(['gallery' => function ($subQuery) use ($request) {
            $subQuery->orderBy('name', 'ASC');

            // verifica se buscou algum item especifico
            if (!empty($request['search'])) {
                $subQuery->where('name', 'LIKE', '%' . $request['search'] . '%');
            }
        }]);

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
     * @return Picture
     */
    public static function find($id = null)
    {
        //verifica se foi informado o id
        if (empty($id)) {
            return new Picture;
        }

        return Picture::find($id)->first();
    }
}
