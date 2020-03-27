<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReviewRequest;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $params = ReviewService::list($request->search);

        return view('admin.pages.review-list')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.review-form')->with(['data' => ReviewService::find()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ReviewRequest  $request
     * @return Response
     */
    public function store(ReviewRequest $request)
    {
        // sanitized and validated data
        $data = $request->validated();
        // save or update
        $response = ReviewService::store($data);

        return redirect()->route('review.list')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.pages.review-form')->with(['data' => ReviewService::find($id)]);
    }

    /**
     * Toggle the status storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function toggle($id)
    {
        $response = ReviewService::toggleStatus($id);

        return redirect()->route('review.list')->with($response);
    }
}
