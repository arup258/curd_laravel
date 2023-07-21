<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function home(){
       return view('home');
   }

   public function about(){
    return view('about');
   }

    public function noaccess(){
        return view('noaccess');
   }
}
