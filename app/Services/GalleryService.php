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
            $entity = Gallery::toggleStatus($id);
            // retorna a entidade criada ou atualizada
            return [
                'success'   => 'A galeria "' . $entity->name . '" foi ' . (($entity->status == true) ? 'ativada' : 'desativada!'),
                'exception' => '',
            ];
        } catch (Exception $exception) {
            // retorna a entidade criada ou atualizada
            return [
                'danger'    => 'Erro ao ativar/desativar a galeria ' . $id,
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
            $data['friendly'] = self::friendly($data['name']);
            // save or update
            $entity = Gallery::store($data);
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

    /**
     * Hidrata o campo name para transforma-lo em friendly name
     *
     * @param string $name
     * @return string
     */
    public static function friendly($name)
    {
        return strtolower(str_replace(' ', '-', str_replace('  ', ' ', preg_replace("/[^A-Za-z ]/", '', $name))));
    }
}
