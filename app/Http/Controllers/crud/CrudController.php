<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class CrudController extends Controller
{
    public function student_register(){
        return view('crud.student_register');
    }

    public function student_dashboard(){
        $student=Student::all();
        // dd($student);
        return view('crud.student_dashboard',compact('student'));
    }

    public function student_register_create(Request $request){
        // dd($request->all());

        $addStudent=new Student();
        $addStudent->name=$request->input('name');
        $addStudent->email=$request->input('email');
        $addStudent->phone=$request->input('phone');
        if ($request->file('image'))
        { 
          $rand_val           = date('YMDHIS') . rand(11111, 99999);
          $image_file_name    = md5($rand_val);
          $file               = $request->file('image');
          $fileName           = $image_file_name.'.'.$file->getClientOriginalExtension();
          $destinationPath    = public_path().'/image/';
          $file->move($destinationPath,$fileName);  
          $addStudent->image = $fileName ;
        }
        $addStudent->city=$request->input('city');
        $addStudent->save();

        return redirect()->route('student.dashboard');

    }
}
