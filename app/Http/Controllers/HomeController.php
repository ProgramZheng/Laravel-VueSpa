<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $realPath = env('APP_NAME').'/public/';
        return view('Home')->with('realPath',$realPath);
    }
}
