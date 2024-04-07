<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperianceController extends Controller
{
    public function experianceList(){
        $data['title']='Experiance List';
        return view('vendor.pages.experiance.list',$data);
    }
    public function addNewTour(){
        $data['title']='Add New Tour';
        return view('vendor.pages.experiance.add_new_tour',$data);
    }
    public function category(){
        $data['title']='Tour Ctegory';
        return view('vendor.pages.experiance.tour_category',$data);
    }

    public function attributes(){
        $data['title']='Tour attributes';
        return view('vendor.pages.experiance.tour_attributes',$data);
    }
}
