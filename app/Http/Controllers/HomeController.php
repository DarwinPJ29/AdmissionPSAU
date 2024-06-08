<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('landingpage.index');
    }
    public function admission(){
        return view('landingpage.admission');
    }
    public function courses(){
        return view('landingpage.courses');
    }
}
