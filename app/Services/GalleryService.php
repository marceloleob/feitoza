<?php

namespace App\Services;

use App\Models\Gallery;
use App\Services\BaseService;
use Illuminate\Support\Str;
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
        $options = Gallery::orderBy('name', 'ASC')
            ->where('status', '=', config('constants.ACTIVE'))
            ->pluck('name', 'id');

        return $options->prepend(' -- Selecione -- ', '');
    }

    /**
     * Monta a lista com paginacao e busca
     *
     * @param string $search
     * @return array
     */
    public static function list($search = '')
    {
        // retorna a query para a busca do grid
        $query = Gallery::orderBy('name', 'ASC');

        // verifica se buscou algum item especifico
        if (!empty($search)) {
            // armazena o valor da busca
            parent::$search = $search;
            // executa a busca
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        // cria uma collection com pagination para montar o grid
        parent::handlePagination($query);
        // efetua o tratamento no collection
        static::customCollection();

        return [
            'data'     => parent::$collection,
            'search'   => parent::$search,
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

        return Gallery::where('id', $id)->first();
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
            $data['friendly'] = Str::slug($data['name'], '-');
            // save or update
            $entity = Gallery::store($data);
            // retorna a entidade criada ou atualizada
            return [
                'success' => (isset($data['id'])) ? 'Atualizado' : 'Cadastrado' . ' com sucesso!',
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
     * Pega todas as galerias
     *
     * @return Gallery
     */
    public static function getAll()
    {
        // retorna a query para a busca do grid
        return Gallery::select('id', 'name', 'friendly')
            ->where('status', config('constants.ACTIVE'))
            ->get();
    }
}
