<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class WebViewController extends Controller
{
    public function index(){
        $data['locations']=Location::orderBy('id','desc')->get();
        return view('web.pages.index',$data);
    }
}
