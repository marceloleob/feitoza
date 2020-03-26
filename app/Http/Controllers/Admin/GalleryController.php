<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $params = GalleryService::list($request);

        return view('admin.pages.gallery-list')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $params = [
            'data' => GalleryService::find(),
        ];

        return view('admin.pages.gallery-form')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GalleryRequest  $request
     * @return Response
     */
    public function store(GalleryRequest $request)
    {
        // sanitized and validated data
        $data = $request->validated();

        $response = GalleryService::store($data);

        return redirect()->route('gallery.list')->with($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $params = [
            'data' => GalleryService::find($id),
        ];

        return view('admin.pages.gallery-form')->with($params);
    }

    /**
     * Toggle the status storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function toggle($id)
    {
        $response = GalleryService::toggleStatus($id);

        return redirect()->route('gallery.list')->with($response);
    }
}
