<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;

class DashboardController extends BaseController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }
}
