<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PictureRequest;
use App\Services\GalleryService;
use App\Services\PictureService;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $params = PictureService::list($request->search);

        return view('admin.pages.picture-list')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $params = [
            'data'    => PictureService::find(),
            'options' => GalleryService::options()
        ];

        return view('admin.pages.picture-form')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PictureRequest  $request
     * @return Response
     */
    public function store(PictureRequest $request)
    {
        // sanitized and validated data
        $request->validated();
        // save or update
        $response = PictureService::store($request);

        // verifica se retornou erro
        if (isset($response['error'])) {
            return back()->withInput()->with($response);
            //return back()->with($response);
        }

        return redirect()->route('picture.list')->with($response);
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
            'data'    => PictureService::find($id),
            'options' => GalleryService::options()
        ];

        return view('admin.pages.picture-edit')->with($params);
    }

    /**
     * Toggle the status storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function toggle($id)
    {
        $response = PictureService::toggleStatus($id);

        return redirect()->route('picture.list')->with($response);
    }
}
