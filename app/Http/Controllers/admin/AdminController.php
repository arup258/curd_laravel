<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use validator;
use Auth;
class AdminController extends Controller
{
    public function login(){
        return view('admin.admin_login');
    }

    public function register(){
        return view('admin.admin_register');
    }

    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function register_create(Request $request){
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|max:30|min:3',
            'email' => 'required|unique:admins|max:255',
            'phone' => 'required|max:10|min:10',
            'password' => 'required|max:8|confirmed',
            'password_confirmation' => 'required|max:8',
            
        ]);

        $addAdmin=new Admin();
        $addAdmin->name=$request->input('name');
        $addAdmin->email=$request->input('email');
        $addAdmin->phone=$request->input('phone');
        $addAdmin->password=Hash::make($request->input('password'));
        $addAdmin->save();

        return redirect()->route('admin.login');
    }

    public function login_create(Request $request){
         //dd($request->all());

         $check=$request->all();
         if(Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password']])){
            return redirect()->route('admin.dashboard')->with('error','Admin login successfully');
         }else{
            return back()->with('error','invalid email or password');

         } 
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('error','Admin logout successfully');
    }
    

}
