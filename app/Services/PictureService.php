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
        $options = Picture::orderBy('name', 'ASC')
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
	public static function list($search)
	{
		// retorna a query para a busca do grid
        $query = Picture::join('galleries', 'pictures.gallery_id', '=', 'galleries.id')
            ->select('pictures.*', 'galleries.name')
            ->orderBy('galleries.name', 'ASC');
        // verifica se buscou algum item especifico
        if (!empty($search)) {
            // armazena o valor da busca
            parent::$search = $search;
            // executa a busca
            $query->where('galleries.name', 'LIKE', '%' . $search . '%');
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
	 * @return Picture
	 */
	public static function find($id = null)
	{
		//verifica se foi informado o id
		if (empty($id)) {
			return new Picture;
		}

		return Picture::where('id', $id)->first();
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
			$entity = Picture::toggleStatus($id);
			// retorna a entidade criada ou atualizada
			return [
				'success'   => 'A foto foi ' . (($entity->status == true) ? 'ativada' : 'desativada!'),
				'exception' => '',
			];
		} catch (Exception $exception) {
			// retorna a entidade criada ou atualizada
			return [
				'danger'    => 'Erro ao ativar/desativar a foto ' . $id,
				'exception' => $exception,
			];
		}
	}

    /**
     * Save or Update the entity
     *
     * @param PictureRequest $request
     * @return array
     */
	public static function store($request)
	{
		try {
            // verifica se e um cadastro
            if (!isset($request->id)) {
                // seta os dados
                $data['gallery_id'] = $request->gallery_id;
                // adiciona a imagem
                $data = array_merge($data, self::handleImage($request));

            } else {
                // seta os dados
                $data['id']         = $request->id;
                $data['gallery_id'] = $request->gallery_id;
                // verifica se foi postado alguma imagem
                if (!empty($request->photo)) {
                    // adiciona a imagem
                    $data = array_merge($data, self::handleImage($request));
                }
            }

            // save or update
            $entity = Picture::store($data);
			// retorna a entidade criada ou atualizada
			return [
				'success' => ((isset($request->id)) ? 'Atualizado' : 'Cadastrado') . ' com sucesso!',
				'entity'  => $entity,
			];
		} catch (Exception $exception) {
			// retorna a entidade criada ou atualizada
			return [
				'danger' => 'Erro ao ' . (isset($request['id']) ? 'atualizar' : 'cadastrar') . ', tente novamente!',
				'error'  => $exception,
			];
		}
    }

    /**
     * Manipula a imagem postada apenas se existir
     *
     * @param PictureRequest $request
     * @return array
     */
    public static function handleImage($request)
    {
        // verifica se e uma imagem
        if ($request->hasFile('photo') === false || $request->photo->isValid() === false) {
            throw new Exception('Você deve anexar uma imagem válida!', 1);
        }

        $data['photo']      = $request->photo->store('gallery');
        $data['extension']  = $request->photo->extension();
        $data['size']       = (float) number_format(($request->photo->getSize() / 1024), 2);
        $data['position']   = 'H';
        $data['showhome']   = 1;

        // salva e retorna o nome da imagem
        return $data;
    }
}
