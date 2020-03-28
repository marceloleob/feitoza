<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\GalleryService;
use App\Services\PictureService;
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
        $params = [
            'current'   => 'gallery',
            'galleries' => GalleryService::getAll(),
            'pictures'  => PictureService::randImages(),
        ];

        return view('site.pages.gallery')->with($params);
    }
}
