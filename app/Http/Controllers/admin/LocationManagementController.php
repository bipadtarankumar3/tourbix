<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationManagementController extends Controller
{
    public function locationList(){
        $data['title']='Location Lists';
        return view('admin.pages.location.list',$data);
    }
    public function locationCategoryList(){
        $data['title']='Location Category Lists';
        return view('admin.pages.location.categorylist',$data);
    }
}
