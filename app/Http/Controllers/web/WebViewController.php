<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebViewController extends Controller
{
    public function index(){
        return view('web.pages.index');
    }
}
