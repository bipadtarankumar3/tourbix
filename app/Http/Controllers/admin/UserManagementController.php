<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function userList(){
        $data['title']='User Lists';
        return view('admin.pages.user.list',$data);
    }
}
