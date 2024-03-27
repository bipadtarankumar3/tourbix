<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponManagementController extends Controller
{
    public function couponList(){
        $data['title']='Coupon Lists';
        return view('admin.pages.coupon.list',$data);
    }
    public function addCoupon(){
        $data['title']='Add Coupon';
        return view('admin.pages.coupon.add',$data);
    }
}
