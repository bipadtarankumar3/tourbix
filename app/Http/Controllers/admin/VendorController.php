<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendorList(){
        $data['title']='Vendor Lists';
        return view('admin.pages.vendor.list',$data);
    }
}
