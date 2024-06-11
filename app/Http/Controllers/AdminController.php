<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard()
   {
      return view('admin.dashboard');
   }
   public function interviewee()
   {
      return view('admin.interviewee');
   }
   public function admission()
   {
      return view('admin.admission');
   }
   public function department()
   {
      return view('admin.department');
   }
}
