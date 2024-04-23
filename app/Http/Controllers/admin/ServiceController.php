<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Service;
use App\Models\sub_category;
use App\Models\breakage;
use App\Models\faq;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;
use Session;
use File;
use Mail;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function hotel_service(){
        $data['title']='Hotel Service Add';
        return view('admin.pages.hotel_service.list',$data);
    }

       //insert
       public function service_add(Request $request){
        
        if ($request->Status == 'Insert') {

            $name = str_replace(' ', '_', $request->Category);
            
                $currentTimeinSeconds = time();
                $Key = substr(sha1($currentTimeinSeconds),0,13);

                $table = new Service();
                $table->user_id=Auth::user()->id;
                $table->service = $request->service;
                $table->status = $request->status;
                $getInsert = $table->save();

                if ($getInsert > 0) {
                    $notification = array(
                        'messege'=>'Service Added Successfully',
                        'alert-type'=>'success'
                    );
                    if ($request->status) {
                        return redirect('admin/hotel/hotel_service')->with($notification);
                    }
                    
                    return back()->with($notification);
                }else{
                    $notification = array(
                        'messege'=>'Data Is Not Added Successfully',
                        'alert-type'=>'error'
                    );
                    return Redirect()->back()->with($notification);
                }

        } else {

            $table=Service::find($request->id);
            $table->service = $request->service;
            $table->status = $request->status;
            $getInsert = $table->save();

            if ($getInsert > 0) {
                $notification = array(
                    'messege'=>'Data Updated Successfully',
                    'alert-type'=>'success'
                );
                return Redirect::to('admin/hotel/hotel_service')->with($notification);
            }else{
                $notification = array(
                    'messege'=>'Data Is Not Updated Successfully',
                    'alert-type'=>'error'
                );
                //return Redirect()->back()->with($notification);
                return Redirect::to('admin/hotel/hotel_service')->with($notification);
            }
        }
    }
    //edit Data
    public function challan_edit($id){
        
        $editData=challan::find($id);
        return view('admin.challan.challan_add',compact('editData','id'));
    }
    //delete Blog Category
    public function challan_delete($id){
        $deleted=challan::where('id',$id)->delete();
        return Redirect::to('admin/challan')->send();
    }


    public function challan_status($status , $id){
         //dd($status);

        if ($status == 'active') {

            $table =  challan::find($id);
           
            $table->cat_status ='INACTIVE' ;
            $result = $table->save();

            if ($result > 0) {
                $notification = array(
                    'messege'=>'Item Is Active',
                    'alert-type'=>'success'
                );
                return back()->with($notification);
            }else{
                $notification = array(
                    'messege'=>'There Have Some Error',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }

        } else {

            $table =  challan::find($id);

            $table->cat_status ='ACTIVE' ;
            $result = $table->save();

            if ($result > 0) {
                $notification = array(
                    'messege'=>'Item Is Inactive',
                    'alert-type'=>'success'
                );
                return back()->with($notification);
            }else{
                $notification = array(
                    'messege'=>'There Have Some Error',
                    'alert-type'=>'worning'
                );
                return Redirect()->back()->with($notification);
            }
        }
    }


}
