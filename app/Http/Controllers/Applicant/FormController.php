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
            return redirect()->route('applicant.requirement');
            // return view('applicant.admission_form');
        }
        return view('applicant.admission_form');
    }

    public function privacy()
    {
        return view('applicant.forms.dataPrivacy');
    }
}
