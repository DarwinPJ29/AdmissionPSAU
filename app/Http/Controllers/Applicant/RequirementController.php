<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function Requirement(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('applicant.requirement_list');
        }
    }
}
