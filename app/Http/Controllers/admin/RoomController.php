<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Documents;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\HotelAttribute;
use App\Models\HotelPolicy;
use App\Models\HotelPrivacy;
use App\Models\HotelSaraunding;
use App\Models\PropertyType;
use App\Models\Service;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use League\CommonMark\Node\Block\Document;
use App\Models\RoomAmenities;

class RoomController extends Controller
{
 
    public function roomamenities()
    {
        $data['title'] = 'Hotel Amenities';
        $data['amenities'] = RoomAmenities::all();
        return view('admin.pages.room.amenities', $data);
    }

    public function amenityEdit($id = null)
    {
        $data['title'] = $id ? 'Edit Amenity' : 'Add New Amenity';
        $data['amenities'] = RoomAmenities::all();
        $data['amenity'] = $id ? RoomAmenities::find($id) : null;
        return view('admin.pages.room.amenities', $data);
    }

    public function amenityUpdateOrAddAmenity(Request $request, $id = null)
    {
        $validatedData = $request->validate([
            'icon' => 'required|string|max:255',
            'amenities_name' => 'required|string|max:255'
        ]);

        $data = [
            'icon' => $validatedData['icon'],
            'name' => $validatedData['amenities_name'],
            'status' => 'publish' // Assuming default status is 'publish'
        ];

        if ($id) {
            $amenity = RoomAmenities::find($id);
            if ($amenity) {
                $amenity->update($data);
                $message = 'Amenity updated successfully';
            } else {
                $message = 'Amenity not found';
            }
        } else {
            RoomAmenities::create($data);
            $message = 'Amenity added successfully';
        }

        $request->session()->flash('success', 'added success');
        return redirect()->back();
    }

    public function amenityDelete(Request $request, $id)
    {
        $amenity = RoomAmenities::find($id);
        if ($amenity) {
            $amenity->delete();
            $message = 'Amenity deleted successfully';
        } else {
            $message = 'Amenity not found';
        }

        $request->session()->flash('success',  $message);
        return redirect()->back();
    }

    public function roomtype()
    {
        $data['title'] = 'Room Type';
        return view('admin.pages.room.roomtype', $data);
    }
    public function roomList()
    {
        $data['title'] = 'Room Management';
        return view('admin.pages.room.list', $data);
    }
    public function addRoom()
    {
        $data['title'] = 'Add Room';
        return view('admin.pages.room.addRoom', $data);
    }

    public function roomAvalibility()
    {
        $data['title'] = 'Room Management';
        return view('admin.pages.room.avalibility', $data);
    }
}
