<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Renderiza a pagina
     *
     * @return Response
     */
    public function index()
    {
        return view('site.pages.gallery')->with(['current' => 'gallery']);
    }
}
