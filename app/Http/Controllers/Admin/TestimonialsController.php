<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\Lang;
use App\Models\Testimonials;

class TestimonialsController extends BaseController
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
        $data = Testimonials::orderBy($this->sort, $this->order);
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

        return view('admin.pages.testimonials-list')->with($params);
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
        if (!empty($this->request->id)) {
            // recupera os dados
            $data = Testimonials::where('id', '=', $this->request->id)->first();
        }
        // monta os parametros
        $params = [
            'data' => $data,
        ];
        // renderiza o formulario com os devidos paramentros
        return view('admin.pages.testimonials-form')->with($params);
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
        $testimonial = Testimonials::store($data);
        // verifica se deu erro
        if (!$testimonial instanceof Testimonials) {
            // retorna o erro encontrado
            return redirect()->route('testimonial.new')->with('error', Lang::get('messages.created.error'));
        }

        // retorna para o formulario
        return redirect()->route('testimonials.list')->with('success', Lang::get('messages.created.success'));
    }

    /**
     * Exclui um registro
     *
     * @return Response
     */
    public function destroy()
    {
        // recupera o codigo do registro
        $testimonial = $this->request->id;
        // verifica se existe registro
        if (!empty($testimonial)) {
            // recupera os dados
            $data = Testimonials::where('id', '=', $testimonial)->first();
        }
        // exclui o registro no banco
        $data->delete();

        // retorna para a lista
        return redirect()->route('testimonials.list')->with('success', Lang::get('messages.deleted.success'));
    }
}
