<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Services\Status;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function ApplicantForm()
    {
        $user = auth()->user();
        if ($user->status == Status::Fillup->value) {
            return view('applicant.admission_form');
        } else
            return redirect()->route('steps');
    }

    public function privacy()
    {
        return view('applicant.forms.dataPrivacy');
    }
}
