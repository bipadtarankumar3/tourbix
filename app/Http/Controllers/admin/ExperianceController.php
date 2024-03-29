<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperianceController extends Controller
{
    public function experianceList(){
        $data['title']='Experiance List';
        return view('admin.pages.experiance.list',$data);
    }
}
