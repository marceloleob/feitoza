<?php

namespace App\Services;

use App\Models\Gallery;
use App\Services\BaseService;
use Exception;

class GalleryService extends BaseService
{
    /**
     * Monta as opcoes do select box
     *
     * @return array
     */
    public static function options()
    {
        return Gallery::orderBy('name', 'ASC')
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
        $query = Gallery::orderBy('name', 'ASC');

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
     * @return Gallery
     */
    public static function find($id = null)
    {
        //verifica se foi informado o id
        if (empty($id)) {
            return new Gallery;
        }

        return Gallery::find($id)->first();
    }
}
