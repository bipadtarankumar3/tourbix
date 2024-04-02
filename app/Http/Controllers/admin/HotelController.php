<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotelList(){
        $data['title']='Hotel Lists';
        return view('admin.pages.hotel.list',$data);
    }
    public function add_hotel(){
        $data['title']='Hotel Add';
        return view('admin.pages.hotel.add_hotel',$data);
    }
    public function proprity_type(){
        $data['title']='Add Poperty Type';
        return view('admin.pages.proprity_type.list',$data);
    }
    public function facility(){
        $data['title']='Facility Add';
        return view('admin.pages.facility.list',$data);
    }
    public function hotel_service(){
        $data['title']='Hotel Service Add';
        return view('admin.pages.hotel_service.list',$data);
    }

    public function roomamenities(){
        $data['title']='Room amenities';
        return view('admin.pages.room.amenities',$data);
    }

    public function roomtype(){
        $data['title']='Room Type';
        return view('admin.pages.room.roomtype',$data);
    }
    public function roomList(){
        $data['title']='Room Management';
        return view('admin.pages.room.list',$data);
    }
    public function addRoom(){
        $data['title']='Add Room';
        return view('admin.pages.room.addRoom',$data);
    }

    public function roomAvalibility(){
        $data['title']='Room Management';
        return view('admin.pages.room.avalibility',$data);
    }

}
