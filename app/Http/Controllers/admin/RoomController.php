<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use League\CommonMark\Node\Block\Document;
use App\Models\RoomAmenities;
use App\Models\RoomType;

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

    // List all room types
    public function roomTypes()
    {
        $data['title'] = 'Room Types';
        $data['roomTypes'] = RoomType::all();
        return view('admin.pages.room.roomtype', $data);
    }

    // Edit a specific room type or add a new one
    public function roomTypeEdit($id = null)
    {
        $data['title'] = $id ? 'Edit Room Type' : 'Add New Room Type';
        $data['roomTypes'] = RoomType::all();
        $data['roomType'] = $id ? RoomType::find($id) : null;
        return view('admin.pages.room.roomtype', $data);
    }

    // Update or add a new room type
    public function roomTypeUpdateOrAdd(Request $request, $id = null)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'status' => 'required|string|max:255'
        ]);

        $data = [
            'type' => $validatedData['type'],
            'status' => $validatedData['status'],
        ];

        if ($id) {
            $roomType = RoomType::find($id);
            if ($roomType) {
                $roomType->update($data);
                $message = 'Room Type updated successfully';
            } else {
                $message = 'Room Type not found';
            }
        } else {
            RoomType::create($data);
            $message = 'Room Type added successfully';
        }

        $request->session()->flash('success', $message);
        return redirect()->back();
    }

    // Delete a specific room type
    public function roomTypeDelete(Request $request, $id)
    {
        $roomType = RoomType::find($id);
        if ($roomType) {
            $roomType->delete();
            $message = 'Room Type deleted successfully';
        } else {
            $message = 'Room Type not found';
        }

        $request->session()->flash('success', $message);
        return redirect()->back();
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
