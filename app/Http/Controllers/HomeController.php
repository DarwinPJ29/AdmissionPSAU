<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('landingpage.index');
    }
    public function landingAdmission(){
        return view('landingpage.admission');
    }
    public function courses(){
        return view('landingpage.courses');
    }
    public function notif(){
        return view('landingpage.notif');
    }
    public function question(){
        return view('applicant_question.sectionA');
    }
}
