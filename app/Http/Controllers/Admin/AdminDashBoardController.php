<?php
/**
 * Created by PhpStorm.
 * User: nrjto
 * Date: 16.03.2018
 * Time: 20:22
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminDashBoardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}