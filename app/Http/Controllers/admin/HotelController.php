<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\HotelPrivacy;
use App\Models\PropertyType;
use App\Models\Service;
use Illuminate\Http\Request;
use Auth;
class HotelController extends Controller
{
    public function hotelList(){
        $data['title']='Hotel Lists';
        return view('admin.pages.hotel.list',$data);
    }
    public function add_hotel(){
        $data['title']='Hotel Add';
        $data['propertyTypes']=PropertyType::orderBy('id','desc')->get();
        $data['facilities']=Facility::orderBy('id','desc')->get();
        $data['privacies']=HotelPrivacy::orderBy('id','desc')->get();
        $data['services'] = Service::orderBy('id', 'desc')->get();
        return view('admin.pages.hotel.add_hotel',$data);
    }
    public function proprity_type(){
        $data['title']='Add Poperty Type';
        $data['propertyTypes']=PropertyType::orderBy('id','desc')->get();
        return view('admin.pages.proprity_type.list',$data);
    }
    public function proprity_typeAddAction(Request $request){
        PropertyType::create([
            'property_type' => $request->property_type,
           
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'added success');
        return redirect()->back();
    }
    public function proprity_typeEditAction(Request $request , $id){
        PropertyType::where('id',$id)->update([
            'property_type' => $request->property_type,
           
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'Update success');
        return redirect()->back();
    }
    public function proprity_type_edit($id){
        $data['title']='Edit Poperty Type';
        $data['propertyTypes']=PropertyType::orderBy('id','desc')->get();
        $data['propertyType']=PropertyType::where('id',$id)->first();
        return view('admin.pages.proprity_type.list',$data);
    }
    public function proprity_type_delete(Request $request , $id){
        $data['title']='Add Poperty Type';
        $data['propertyType']=PropertyType::where('id',$id)->delete();
        $request->session()->flash('success', 'prperty Type Deleted successfully');
        return redirect()->back();
    }

    public function facility(){
        $data['title']='Facility Add';
        $data['facilities']=Facility::orderBy('id','desc')->get();
        return view('admin.pages.facility.list',$data);
    }

    public function facilityAddAction(Request $request){
        Facility::create([
            'facility_name' => $request->facility_name,
           
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'added success');
        return redirect()->back();
    }

    public function facilityEditAction(Request $request , $id){
        Facility::where('id',$id)->update([
            'facility_name' => $request->facility_name,
           
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'Update success');
        return redirect()->back();
    }

    public function facility_edit($id){
        $data['title']='Edit Poperty Type';
        $data['propertyTypes']=Facility::orderBy('id','desc')->get();
        $data['propertyType']=Facility::where('id',$id)->first();
        return view('admin.pages.proprity_type.list',$data);
    }
    public function facility_delete(Request $request , $id){
        $data['title']='Add Poperty Type';
        $data['propertyType']=Facility::where('id',$id)->delete();
        $request->session()->flash('success', ' Deleted successfully');
        return redirect()->back();
    }
    public function hotelPrivacy(){
        $data['title']='Privacy Add';
        $data['privacies']=HotelPrivacy::orderBy('id','desc')->get();
        return view('admin.pages.privacy.list',$data);
    }

    public function privacyAddAction(Request $request){
        HotelPrivacy::create([
            'privacy_name' => $request->privacy_name,
           
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'added success');
        return redirect()->back();
    }

    public function privacyEditAction(Request $request , $id){
        HotelPrivacy::where('id',$id)->update([
            'privacy_name' => $request->privacy_name,
           
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'Update success');
        return redirect()->back();
    }

    public function privacy_edit($id){
        $data['title']='Edit Privacy ';
        $data['privacies']=HotelPrivacy::orderBy('id','desc')->get();
        $data['privacy']=HotelPrivacy::where('id',$id)->first();
        return view('admin.pages.privacy.list',$data);
    }
    public function privacy_delete(Request $request , $id){
        $data['title']='Add Poperty Type';
        $data['propertyType']=HotelPrivacy::where('id',$id)->delete();
        $request->session()->flash('success', ' Deleted successfully');
        return redirect()->back();
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
