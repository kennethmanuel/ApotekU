<?php

namespace App\Http\Controllers\Admin;

use app\http\controllers\controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view("admin.index");
    }
}
