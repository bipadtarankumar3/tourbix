<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class VendorAuthController extends Controller
{
    public function login(){
        return view('vendor.Auth.login');
    }
    public function vendorLoginAction(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            // dd('hi');
           
                $request->session()->flash('success', 'Login Success');
                return redirect('vendor/dashboard');
           
        } else {
            $request->session()->flash('error', 'You have entered wrong Email or Password.');
            return redirect()->back();
        }
    }
    public function dashboard(){
        return view('vendor.pages.dashboard.dashboard');
    }
    public function logout(Request $request){
        Auth::logout();


     $request->session()->flash('error','loged out');
     return redirect('vendor/login');
    }
}
