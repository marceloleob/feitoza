<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\PictureService;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Renderiza a pagina
	 *
	 * @return Response
	 */
	public function index()
	{
        $params = [
            'current' => 'home',
            'gallery' => PictureService::randImages(6),
            'reviews' => ReviewService::randReviews(),
        ];

		return view('site.pages.home')->with($params);
	}
}
