<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\experianceAttribute;
use App\Models\experianceCategory;
use Illuminate\Http\Request;
use Auth;


class ExperianceController extends Controller
{
    public function experianceList(){
        $data['title']='Experiance List';
        return view('admin.pages.experiance.list',$data);
    }
    public function addNewTour(){
        $data['title']='Add New Tour';
        return view('admin.pages.experiance.add_new_tour',$data);
    }


    //------------ Category -------------------------------------
    public function category(){
        $data['title']='Tour Ctegory';
        $data['lists'] = experianceCategory::all();
        return view('admin.pages.experiance.tour_category',$data);
    }

    public function categoryEdit($id = null)
    {
        $data['title'] = 'Tour Ctegory Edit';
        $data['lists'] = experianceCategory::all();
        if ($id) {
            $data['category'] = experianceCategory::findOrFail($id);
        }
        return view('admin.pages.experiance.tour_category', $data);
    }


    public function categoryAddAction(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'icon_class' => 'required|string|max:255'
        ]);

        if ($request->experiance_category == 'add') {
            // Create a new location record
            experianceCategory::create([
                'category_name' => $validatedData['category_name'],
                'icon_class' => $validatedData['icon_class'],
                'added_by' => Auth::user()->id,
                'status' => 1
                // Add any additional fields here if needed
            ]);

            // Flash success message to the session
            $request->session()->flash('success', 'Location added successfully');
        } else {

           // Create a new location record
            experianceCategory::where('id',$request->experiance_category_id)->update([
                'category_name' => $validatedData['category_name'],
                'icon_class' => $validatedData['icon_class'],
                'status' =>1
                // Add any additional fields here if needed
            ]);

            // Flash success message to the session
            $request->session()->flash('success', 'Location updated successfully');
        }
        
        // Redirect back to the location list page
        return redirect()->back();
    }

    public function categoryDelete(Request $request, $id)
    {
        $category = experianceCategory::whereId($id)->delete();
        $request->session()->flash('success', 'Category Deleted successfully');
        return redirect()->back();
    }


    //------------ Category -------------------------------------


    //------------ attributes -------------------------------------
    public function attributes(){
        $data['title']='Tour attributes';
        $data['lists'] = experianceAttribute::all();
        return view('admin.pages.experiance.tour_attributes',$data);
    }

    public function attributeEdit($id = null)
    {
        $data['title'] = 'Tour attributes Edit';
        $data['lists'] = experianceAttribute::all();
        if ($id) {
            $data['attribute'] = experianceAttribute::findOrFail($id);
        }
        return view('admin.pages.experiance.tour_attributes', $data);
    }


    public function attributeAddAction(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'attribute_type' => 'required',
            'attribute_name' => 'required'
        ]);

        if ($request->experiance_attribute == 'add') {
            // Create a new location record
            experianceAttribute::create([
                'attribute_type' => $request->attribute_type,
                'attribute_name' => $request->attribute_name,
                'icon_class' => $request->icon_class,
                'hide_detail_service' => $request->hide_detail_service,
                'hide_filter_serch' => $request->hide_filter_serch,
                'added_by' => Auth::user()->id,
                'status' => 1
                // Add any additional fields here if needed
            ]);

            // Flash success message to the session
            $request->session()->flash('success', 'attributes added successfully');
        } else {

           // Create a new attributes record
            experianceAttribute::where('id',$request->experiance_attribute_id)->update([
                'attribute_type' => $request->attribute_type,
                'attribute_name' => $request->attribute_name,
                'icon_class' => $request->icon_class,
                'hide_detail_service' => $request->hide_detail_service,
                'hide_filter_serch' => $request->hide_filter_serch,
                'updated_by' => Auth::user()->id,
                'status' => 1
                // Add any additional fields here if needed
            ]);

            // Flash success message to the session
            $request->session()->flash('success', 'attributes updated successfully');
        }
        
        // Redirect back to the attributes list page
        return redirect()->back();
    }

    public function attributeDelete(Request $request, $id)
    {
        $category = experianceAttribute::whereId($id)->delete();
        $request->session()->flash('success', 'attributes Deleted successfully');
        return redirect()->back();
    }
    //------------ attributes end -------------------------------------

}
