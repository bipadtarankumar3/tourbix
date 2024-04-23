<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LocationCategory;
use Illuminate\Http\Request;
use Auth;

class LocationManagementController extends Controller
{
    public function locationList()
    {
        $data['title'] = 'Location Lists';
        return view('admin.pages.location.list', $data);
    }
    public function locationCategoryList()
    {
        $data['title'] = 'Location Category Lists';
        $data['lists'] = LocationCategory::orderBy('id', 'desc')->get();
        return view('admin.pages.location.categorylist', $data);
    }
    public function locationCategoryEdit($id)
    {
        $data['title'] = 'Location Category Lists';
        $data['category'] = LocationCategory::where('id', $id)->first();
        $data['lists'] = LocationCategory::orderBy('id', 'desc')->get();

        return view('admin.pages.location.categorylist', $data);
    }
    public function locationCategoryAddAction(Request $request)
    {
        LocationCategory::create([
            'category_name' => $request->category_name,
            'icon_class' => $request->icon_class,
            'added_by' => Auth::user()->id,
            'status' => '1'
        ]);
        $request->session()->flash('success', 'added success');
        return redirect()->back();
    }
    public function locationCategoryEditAction(Request $request, $id)
    {
        $category = LocationCategory::findOrFail($id);

        $category->update([
            'category_name' => $request->category_name,
            'icon_class' => $request->icon_class,
        ]);

        $request->session()->flash('success', 'Category updated successfully');
        return redirect()->back();
    }

    public function locationCategoryDelete(Request $request, $id)
    {
        $category = LocationCategory::whereId($id)->delete();



        $request->session()->flash('success', 'Category Deleted successfully');
        return redirect()->back();
    }
}
