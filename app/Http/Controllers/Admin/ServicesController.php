<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\Lang;
use App\Models\Services;

class ServicesController extends BaseController
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

        return view('admin.pages.services-list')->with($params);
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
        // verifica se esta editando um registro
        if (!empty($this->request->service)) {
            // recupera os dados
            $data = Services::where('id', '=', $this->request->service)->first();
        }
        // monta os parametros
        $params = [
            'data' => $data,
        ];
        // renderiza o formulario com os devidos paramentros
        return view('admin.pages.services-form')->with($params);
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

        // salva no banco de dados
        $services = Services::store($data);
        // verifica se deu erro
        if (!$services instanceof Services) {
            // retorna o erro encontrado
            return redirect()->route('service.new')->with('error', Lang::get('messages.created.error'));
        }

        // retorna para o formulario
        return redirect()->route('service.list')->with('success', Lang::get('messages.created.success'));
    }
}
