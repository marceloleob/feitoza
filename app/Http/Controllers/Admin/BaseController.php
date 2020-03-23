<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * Illuminate\Http\Request
     *
     * @var Request
     */
    public $request;

    /**
     * reserva a acao do metodo
     *
     * @var string
     */
    public $action;

    /**
     * ordem da lista
     *
     * @var string
     */
    public $sort = 'name';

    /**
     * ordem (ASC / DESC)
     *
     * @var string
     */
    public $order;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        // verifica a autenticacao
        $this->middleware('auth');
        // recupera os REQUESTS caso tenha
        $this->request = $request;
    }

	/**
	 * Recupera as configuracoes de paginacao
	 *
	 * @return void
	 */
	public function handlePaginate()
	{
        $this->sort  = $this->sort;
        $this->order = $this->request->order === 'DESC' ? 'DESC' : 'ASC';
    }

    /**
     * Formata os GRIDS adicionando CSS e TITLE de acordo com o status
     *
     * @return Collection
     */
    public function handleStatusGrid($collection)
    {
        // Percorre toda a Collection
        $collection->map(function ($array) {
            // verifica se o status e Ativo
            if ($array->status == 1) {
                $array->status = ['class' => 'success', 'label' => Lang::get('html.field.status.active')];
            } else {
                $array->status = ['class' => 'danger', 'label' => Lang::get('html.field.status.inactive')];
            }
        });

        return $collection;
    }
}
