<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard(){
    return view('admin.dashboard');
   }
   public function account(){
    return view('admin.account');
   }
}