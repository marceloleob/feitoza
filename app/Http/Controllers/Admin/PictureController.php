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
     * Store a newly created resource in storage.
     *
     * @param  PictureRequest  $request
     * @return Response
     */
    public function store(PictureRequest $request)
    {
        // sanitized and validated data
        $request->validated();
        // save
        $response = PictureService::store($request);

        // verifica se retornou erro
        if (isset($response['error'])) {
            return back()->withInput()->with($response);
        }

        return redirect()->route('picture.list')->with($response);
    }

    /**
     * Update resource in storage.
     *
     * @param  PictureRequest  $request
     * @return Response
     */
    public function update(PictureRequest $request)
    {
        // sanitized and validated data
        $request->validated();
        // update
        $response = PictureService::update($request);

        // verifica se retornou erro
        if (isset($response['error'])) {
            return back()->withInput()->with($response);
        }

        return redirect()->route('picture.list')->with($response);
    }

    /**
     * Delete a picture.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        // exclui a foto no servidor e no BD
        $response = PictureService::delete($id);

        // verifica se retornou erro
        if (isset($response['error'])) {
            return back()->withInput()->with($response);
        }

        return redirect()->route('picture.list')->with($response);
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
