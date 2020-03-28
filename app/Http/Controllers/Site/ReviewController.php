<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Renderiza a pagina
     *
     * @return Response
     */
    public function index()
    {
        $params = [
            'current' => 'review',
            'reviews' => ReviewService::randReviews(),
        ];

        return view('site.pages.review')->with($params);
    }
}
