<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
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
