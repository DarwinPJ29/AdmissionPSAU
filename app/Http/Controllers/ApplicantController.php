<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{

    public function ApplicantForm()
    {
        $user = auth()->user();
        if ($user->form_done) {
            dd("Applicant done redirect to requirement");
            // return view('applicant.admission_form');
        }
        return view('applicant.admission_form');
    }
}
