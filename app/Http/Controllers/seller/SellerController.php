<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use validator;
use Auth;

class SellerController extends Controller
{
    public function seller_login(){
        return view('seller.seller_login');
    }
    public function seller_register(){
        return view('seller.seller_register');
    }
    public function seller_dashboard(){
        return view('seller.seller_dashboard');
    }
    public function seller_register_create(Request $request){
        // dd($request->all());

        $validated = $request->validate([
            'name'=>'required|max:30|min:3',
            'email'=>'required|unique:sellers|max:255',
            'phone'=>'required|max:10|min:10',
            'password'=>'required|confirmed|max:8|min:6',
            'password_confirmation'=>'required|max:8',
        ]);

        $addSeller=new Seller();
        $addSeller->name=$request->input('name');
        $addSeller->email=$request->input('email');
        $addSeller->phone=$request->input('phone');
        $addSeller->password=Hash::make($request->input('password'));
        $addSeller->save();
        return redirect()->route('seller.login');
    }

    public function seller_login_create(Request $request){
        // dd($request->all());

        $check=$request->all();
        if(Auth::guard('seller')->attempt(['email'=>$check['email'],'password'=>$check['password']])){
            return redirect()->route('seller.dashboard')->with('error','Seller Login successfully');
        }else{
            return back()->with('error','Invalid email or password');
        }
    }

    public function seller_logout(){
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login')->with('error_logout','Seller Logout successfully');
    }
    
}
