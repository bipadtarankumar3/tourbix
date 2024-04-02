<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotelList(){
        $data['title']='Hotel Lists';
        return view('vendor.pages.hotel.list',$data);
    }

    public function add_hotel(){
        $data['title']='Hotel Add';
        return view('vendor.pages.hotel.add_hotel',$data);
    }

    
    public function roomList(){
        $data['title']='Room Management';
        return view('vendor.pages.room.list',$data);
    }

    public function roomAvalibility(){
        $data['title']='Room Management';
        return view('vendor.pages.room.avalibility',$data);
    }

}
