<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function ApplicantForm()
    {
        return view('applicant.admission_form');
    }
}