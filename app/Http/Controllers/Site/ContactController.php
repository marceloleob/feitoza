<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Renderiza a pagina
     *
     * @return Response
     */
    public function index()
    {
        return view('site.pages.contact');
    }
}
