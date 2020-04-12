<?php

namespace App\Services;

use App\Models\Picture;
use App\Services\BaseService;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File as SymfonyFile;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Exception\NotReadableException;
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
	public static function list($search = '')
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
	 * Pega 6 imagens randomicamente
	 *
	 * @param int $limit
	 * @return Picture
	 */
	public static function randImages($limit = null)
	{
		// retorna a query para a busca do grid
		$query = Picture::join('galleries', 'pictures.gallery_id', '=', 'galleries.id')
			->select('pictures.photo', 'pictures.position', 'galleries.name', 'galleries.friendly')
			->where('pictures.status', config('constants.ACTIVE'))
			->inRandomOrder()
			->get();

		if (!empty($limit)) {
			$query->take($limit);
		}

		return $query;
    }

	/**
	 * Verifica se foi anexado alguma foto no POST
	 *
	 * @param PictureRequest $request
	 * @return boolean
	 */
	public static function hasImage($request)
	{
		// verifica se tem alguma imagem anexa
		if (empty($request->photo) || $request->hasFile('photo') === false) {
			return false;
		}
		return true;
	}

	/**
	 * Verifica o limite de fotos que ainda podem ser salvos em uma especifica galeria
	 *
	 * @param PictureRequest $request
	 * @return boolean
	 */
	public static function limitImage($request)
	{
		// verifica quantas fotos podem ser adicionadas
		$count = Picture::where('gallery_id', $request->gallery_id)->count();
		// recupera o limite de fotos para cada galeria
		$limit = config('constants.PICTURES_LIMIT');
		// verifica se pode adicionar fotos para esta galeria
		if (count($request->photo) > ($limit - $count)) {
			return false;
		}
		return true;
    }

    /**
     * Manipula os dados da imagem, salva no servidor, adiciona estampa e redimensiona a foto
     *
     * @param int            $galleryId
     * @param PictureRequest $file
     * @return void
     */
    public static function saveImage($galleryId, $file)
    {
        // verifica se e uma imagem
        if ($file->isValid() === false) {
            throw new Exception('Você deve anexar uma imagem válida!', 1);
        }
        // recupera os dados da foto
        $ext  = strtolower($file->getClientOriginalExtension());
        $name = config('constants.PICTURES_PATH') . substr(md5($file->getClientOriginalName()), 0, 10) . time('His') . '.' . $ext;
        $size = $file->getSize(); // (BYTES)
        // armazena os dados no array
        $data = [
            'gallery_id' => (int) $galleryId,
            'photo'      => $name,
            'extension'  => $ext,
            'size'       => (int) number_format(($size / 1024), 0, '', ''),
            'position'   => 'H',
            'showhome'   => 1
        ];
        // verifica o tamanho da foto
        if ($size > config('constants.PICTURES_SIZE')) {
            throw new Exception('A foto deve ter no máximo ' . config('constants.PICTURES_PATH_MSG') . '!', 1);
        }

        // grava o arquivo fisico
        $send = $file->move('storage/' . config('constants.PICTURES_PATH'), $name);
        // verifica se salvou a imagem em disco
        if (!$send instanceof SymfonyFile) {
            throw new Exception('Erro ao salvar a imagem, por favor tente novamente.', 1);
        }
        try {
            // cria uma instancia da foto para manipular
            $photo = Image::make('storage/' . $name);
            // cria uma instancia da estampa
            $watermark = Image::make('images/stamp.png');
            // insere a estampa na foto
            $photo->insert($watermark, 'center');
            // recupera as dimensoes
            list($width, $height) = @getimagesize('storage/' . $name);
            // calcula o novo tamanho fixando a altura em 800px
            $newHeight = 800;
            $newWidth  = ($newHeight * $width) / $height;
            // executa
            $photo->resize($newWidth, $newHeight)->save('storage/' . $name);
            // verifica se a foto e H ou V
            if ($width < $height) {
                $data['position'] = 'V';
            }
            // retorna os dados para salvar no BD
            return $data;

        } catch (NotReadableException $exception) {
            throw new Exception('Erro ao localizar a imagem no servidor, por favor tente novamente!', $exception);
        }
    }

    /**
     * Exclui uma foto do servidor
     *
     * @param PictureRequest $image
     * @return void
     */
    public static function deleteImage($image)
    {
        // verifica se a imagem existe
        if (Storage::exists($image->photo) === false) {
            throw new Exception('A foto não foi encontrada no servidor, por favor tente novamente', 1);
        }
        // exclui a imagem
        return Storage::delete($image->photo);
    }

	/**
	 * Save the Picture
	 *
	 * @param PictureRequest $request
	 * @return array
	 */
	public static function store($request)
	{
		try {
			// verifica se tem alguma imagem anexa
			if (self::hasImage($request) === false) {
				throw new Exception('Você deve anexar pelo menos uma foto!', 1);
			}
			// verifica se pode adicionar fotos para esta galeria
			if (self::limitImage($request) === false) {
				throw new Exception('Você está ultrapassando os limites de fotos para esta galeria!', 1);
            }
			// percorretodas as fotos postadas
			foreach ($request->photo as $file) {
                // manipula as fotos e salva em disco
                $data = self::saveImage($request->gallery_id, $file);
				// save or update
				Picture::store($data);
			}
			// retorna a entidade criada ou atualizada
			return [
				'success' => 'A foto foi cadastrada com sucesso!',
				'entity'  => '',
			];
		} catch (Exception $exception) {
			// retorna a entidade criada ou atualizada
			return [
				'danger' => $exception->getMessage(),
				'error'  => true,
			];
		}
	}

	/**
	 * Update the Picture
	 *
	 * @param PictureRequest $request
	 * @return array
	 */
	public static function update($request)
	{
		try {
            // recupera a foto que sera alterada
            $image = Picture::where('id', $request->id)->firstOrFail();
			// verifica se a galeria nao foi alterada & verifica se tem alguma imagem anexa
			if ($image->gallery_id === $request->gallery_id && self::hasImage($request) === false) {
				throw new Exception('Você deve anexar pelo menos uma foto!', 1);
            }
            // exclui a foto atual e verifica se deu certo
            if (self::deleteImage($image) === false) {
                throw new Exception('Erro ao excluir a foto atual, por favor tente novamente!', 1);
            }
            // manipula as fotos e salva em disco
            $data = self::saveImage($request->gallery_id, $request->photo);
            // adiciona o indice que sera atualizado
            $data['id'] = $request->id;
            // save or update
            Picture::store($data);
			// retorna a entidade criada ou atualizada
			return [
				'success' => 'A foto foi atualizada com sucesso!',
				'entity'  => '',
			];
		} catch (Exception $exception) {
			// retorna a entidade criada ou atualizada
			return [
				'danger' => $exception->getMessage(),
				'error'  => true,
			];
		}
    }

    /**
     * Exclui uma foto do BD e do servidor
     *
     * @param int $id
     * @return void
     */
    public static function delete($id)
    {
		try {
            // recupera a foto que sera excluida
            $photo = Picture::where('id', $id)->firstOrFail();
            // exclui a foto atual e verifica se deu certo
            if (self::deleteImage($photo) === false) {
                throw new Exception('Erro ao excluir a foto, por favor tente novamente!', 1);
            }
            // exclui a foto do BD
            $photo->delete();
			// retorna a entidade criada ou atualizada
			return [
				'success' => 'A foto foi excluída com sucesso!',
				'entity'  => '',
			];
		} catch (Exception $exception) {
			// retorna a entidade criada ou atualizada
			return [
				'danger' => $exception->getMessage(),
				'error'  => true,
			];
		}
    }
}
