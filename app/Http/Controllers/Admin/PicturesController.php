<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\File\File as SymfonyFile;
use App\Models\Pictures;
use App\Models\Services;

class PicturesController extends BaseController
{
	/**
	 * Imprime um lista com os registros da tabela
	 *
	 * @return Response
	 */
	public function index()
	{
		// Configura a ordenacao da lista
		parent::handlePaginate();
		// Constroi uma instancia ordenada
		//$data = Pictures::with('services')->orderBy($this->sort, $this->order);
		$data = Services::orderBy($this->sort, $this->order);
		// Cria uma paginacao fixando a quantidade de registros por pagina
		$data = $this->handleStatusGrid($data->paginate(config('constants.TOTAL_PAGE')));
		// Constroi os links da paginacao
		$paginate = $data->appends([
			'sort'  => $this->sort,
			'order' => $this->order
		])->links();
		// Organiza os parametros enviados para a View
		$params = [
			'data'     => $data,
			'paginate' => $paginate,
			'str'      => '&order=' . ($this->order == 'ASC' || null ? 'DESC' : 'ASC')
		];

		return view('admin.pages.pictures-list')->with($params);
	}

	/**
	 * Imprime um formulario para criar um novo registro ou editar um existente
	 *
	 * @return Response
	 */
	public function create()
	{
		// inicializa os parametros
		$data  = null;
		$album = null;
		// verifica se foi informado um servico
		if (!empty($this->request->service)) {
			// recupera todas as imagens do servico
			$album = Pictures::join('services', 'pictures.service_id', '=', 'services.id')
				->select(
					'pictures.id AS id',
					'services.id AS service_id',
					'pictures.photo',
					'pictures.position',
					'services.name',
					'services.friendly',
					'pictures.showhome',
					'pictures.status')
				->where('pictures.service_id', '=', $this->request->service)
				->getQuery()
				->get();

			// verifica se foi informado uma picture para EDITAR
			if (!empty($this->request->picture)) {
				// recupera os dados da imagem para editar
				$data = Pictures::join('services', 'pictures.service_id', '=', 'services.id')
					->select(
						'pictures.id AS id',
						'services.id AS service_id',
						'pictures.photo',
						'services.friendly',
						'pictures.showhome',
						'pictures.status')
					->where('pictures.id', '=', $this->request->picture)
					->first();
			}
		}

		// monta os parametros
		$params = [
			'data'            => $data,
			'album'           => $album,
			'optionsservices' => Services::options(), // carrega o combo dos servicos
			'currentservices' => $this->request->service,
		];
		// renderiza o formulario com os devidos paramentros
		return view('admin.pages.pictures-form')->with($params);
	}

	/**
	 * Salva ou atualiza um registro
	 *
	 * @return Response
	 */
	public function store()
	{
		// recupera os dados do formulario
		$data = $this->request->all();

		/**
		 * Executa as validacoes iniciais da imagem
		 */

		// efetua a validacao
		$validate = Pictures::validate($data);
		// verifica se houve falha
		if (true === $validate->fails()) {
			// retorna o erro
			throw new ValidationException($validate);
		}

		// recupera os dados do servico
		$service = Services::where('id', '=', $data['service_id'])->firstOrFail();
		// verifica se encontrou
		if (!$service instanceof Services) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('bestway.admin.pictures.form.service.not.found'));
		}

		// verifica se NAO foi postado nenhuma imagem
		if (false === $this->request->hasfile('photo')) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.image.path.undefined'));
		}


		/**
		 * Recupera os dados da Imagem
		 */

		// recupera o upload
		$file        = $data['photo'];
		$destination = config('constants.PICTURES_PATH') . $service->friendly . '/';
		$mimeType    = strtolower($file->getMimeType());
		$extension   = strtolower($file->getClientOriginalExtension());
		$filename    = md5($file->getClientOriginalName()) . '-' . time() . '.' . $extension;
		$size        = $file->getSize(); // (BYTES)

		/**
		 * Executa as validacoes de seguranca
		 */

		// verifica o tamanho da imagem se e maior que 2MB
		if ($size > config('constants.PICTURES_SIZE')) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.image.size'));
		}
		// verifica se o arquivo ja existe no servidor
		if (true === File::exists($destination . $filename)) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.image.exists'));
		}

		/**
		 * Preenche os campos para salvar no banco
		 */
		$data['photo']     = $filename;
		$data['extension'] = $extension;
		$data['size']      = number_format(($size / 1024));
		$data['position']  = 'H';


		/**
		 * verifica se e para EDITAR a imagem
		 */
		if (!empty($data['id'])) {
			// recupera a imagem atual
			$current = Pictures::where('id', '=', $data['id'])->firstOrFail();
			// verifica se encontrou
			if (!$current instanceof Pictures) {
				// retorna o erro encontrado
				return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.image.notfound'));
			}
			// verifica se o arquivo ja existe no servidor
			if (false === File::exists($destination . $current->photo)) {
				// retorna o erro encontrado
				return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.path.undefined'));
			}
			// exclui a imagem atual
			File::delete($destination . $current->photo);
		}
		/**
		 * ----------------------------------
		 */


		// grava o arquivo fisico
		$sendFile = $file->move($destination, $filename);
		// verifica se salvou a imagem em disco
		if (!$sendFile instanceof SymfonyFile) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.image.move.error'));
		}

		// recupera as dimensoes do arquivo
		$dimensoes = $this->getDimensionsImage($destination . $filename, $extension);
		// verifica as dimensoes
		if ($dimensoes['width'] < $dimensoes['height']) {
			// seta a posicao vertical
			$data['position'] = 'V';
		}

		// salva no banco de dados
		$picture = Pictures::store($data);
		// verifica se deu erro
		if (!$picture instanceof Pictures) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', $service->id)->with('error', Lang::get('messages.created.error'));
		}

		// retorna para o formulario
		return redirect()->route('gallery.service.edit', $service->id)->with('success', Lang::get('messages.image.move.success'));
	}

	/**
	 * Exclui um registro
	 *
	 * @return Response
	 */
	public function destroy()
	{
		// recupera o codigo da imagem
		$service = $this->request->service;
		$picture = $this->request->picture;

		// verifica se e uma atualizacao
		if (empty($service) || empty($picture)) {
			// retorna para o formulario
			return redirect()->route('gallery.service.edit', [$service, $picture])->with('error', Lang::get('messages.image.destroy.error'));
		}

		// recupera os dados da imagem
		$current = Pictures::join('services', 'pictures.service_id', '=', 'services.id')
			->select('pictures.id AS id', 'services.id AS service_id', 'pictures.photo', 'services.friendly', 'pictures.status')
			->where('pictures.id', '=', $picture)
			->first();

		// verifica se encontrou
		if (!$current instanceof Pictures) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', [$service, $picture])->with('error', Lang::get('messages.image.destroy.error'));
		}

		// recupera o caminho da imagem
		$destination = config('constants.PICTURES_PATH') . $current->friendly . '/';

		// verifica se o arquivo ja existe no servidor
		if (false === File::exists($destination . $current->photo)) {
			// retorna o erro encontrado
			return redirect()->route('gallery.service.edit', [$service, $picture])->with('error', Lang::get('messages.image.destroy.path.error'));
		}

		// exclui a imagem atual
		File::delete($destination . $current->photo);
		// exclui o registro no banco
		$current->delete();

		// retorna para o formulario
		return redirect()->route('gallery.service.edit', $service)->with('success', Lang::get('messages.image.destroy.success'));
	}

	/**
	 * Seta uma imagem para aparecer na home ou nao
	 *
	 * @return Response
	 */
	public function showHome()
	{
		// recupera o codigo da imagem
		$service  = $this->request->service;
		$picture  = $this->request->picture;
		$showhome = $this->request->showhome;

		// verifica se e uma atualizacao
		if (empty($service) || empty($picture)) {
			// retorna para o formulario
			return redirect()->route('gallery.service.edit', [$service, $picture])->with('error', Lang::get('messages.updated.error'));
		}

		// atualiza todas as imagens do servico retirando o 'showhome'
		Pictures::where('service_id', '=', $service)->update(['showhome' => false]);

		// verifica se e para setar alguma foto como true
		if ($showhome == '1') {
			// recupera os dados da imagem
			$current = Pictures::where('id', '=', $picture)->first();
			// verifica se encontrou
			if (!$current instanceof Pictures) {
				// retorna o erro encontrado
				return redirect()->route('gallery.service.edit', [$service, $picture])->with('error', Lang::get('messages.updated.error'));
			}
			// atualiza o campo
			$current->showhome = true;
			//salva
			$current->save();
		}

		// retorna para o formulario
		return redirect()->route('gallery.service.edit', $service)->with('success', Lang::get('messages.updated.success'));
	}

	/**
	 * Retrieving the image dimensions
	 *
	 * @param  string  $image
	 * @param  string  $extension
	 * @return array
	 */
	public function getDimensionsImage($image, $extension)
	{
		// verifica o tipo da imagem
		switch ($extension) {
			case 'jpg' : case 'jpeg' : case 'pjpeg' :
				$imagenew = @imagecreatefromjpeg($image);
				break;
			case 'png' :
				$imagenew = @imagecreatefrompng($image);
				break;
			case 'gif' :
				$imagenew = @imagecreatefromgif($image);
				break;
			default :
				$imagenew = false;
		}

		return [
			'width'  => imagesx($imagenew),
			'height' => imagesy($imagenew)
		];
	}
}
