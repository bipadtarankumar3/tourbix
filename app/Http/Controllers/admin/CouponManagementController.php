<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponManagementController extends Controller
{
    public function couponList()
    {
        $data['title'] = 'Coupon Lists';
        return view('admin.pages.coupon.list', $data);
    }
    public function addCoupon()
    {
        $data['title'] = 'Add Coupon';
        return view('admin.pages.coupon.add', $data);
    }

    public function addAction(Request $request)
    {
        // Validate the request data
        // $request = $request->validate([
        //     'coupon_code' => 'required|string',
        //     'coupon_name' => 'required|string',
        //     'coupon_amount' => 'required|numeric',
        //     'discount_type' => 'required|in:flat,percentage',
        //     'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming feature_image is a file upload field
        //     'end_date' => 'required|date',
        //     'min_spend' => 'nullable|numeric',
        //     'max_spend' => 'nullable|numeric',
        //     'only_for_services' => 'boolean',
        //     'only_for_user' => 'boolean',
        //     'usage_limit_per_coupon' => 'nullable|integer',
        //     'usage_limit_per_user' => 'nullable|integer',
        //     'status' => 'in:draft,published',
        //     // Add validation rules for other fields
        // ]);

        // Handle file upload for feature_image if provided
        $featureImagePath = null;
        if ($request->hasFile('feature_image')) {
            $featureImage = $request->file('feature_image');
            $featureImageName = time() . '_' . $featureImage->getClientOriginalName();
            $featureImagePath = '/images/' . $featureImageName; // Assuming 'images' directory inside 'public'
            $featureImage->move(public_path('images'), $featureImageName);
        }

        // Create a new coupon instance using the create method of the Coupon model
        $coupon = Coupon::create([
            'coupon_code' => $request['coupon_code'],
            'coupon_name' => $request['coupon_name'],
            'coupon_amount' => $request['coupon_amount'],
            'discount_type' => $request['discount_type'],
            'feature_image' => $featureImagePath,
            'end_date' => $request['end_date'],
            'min_spend' => $request['min_spend'],
            'max_spend' => $request['max_spend'],
            'only_for_services' => $request['only_for_services'],
            'only_for_user' => $request['only_for_user'],
            'usage_limit_per_coupon' => $request['usage_limit_per_coupon'],
            'usage_limit_per_user' => $request['usage_limit_per_user'],
            'status' => $request['status'],
        ]);

        // Redirect to a success page or return a response
        return redirect()->back()->with('success', 'Coupon created successfully.');
    }
}
