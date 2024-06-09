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
   public function admission(){
    return view('admin.admission');
   }
   public function department(){
    return view('admin.department');
   }
   public function programs(){
    return view('admin.programs');
   }
   public function requirements(){
    return view('admin.requirements');
   }
}
