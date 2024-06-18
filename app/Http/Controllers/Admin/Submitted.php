<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use App\Models\Educational;
use App\Models\Guardian;
use App\Models\Information;
use App\Models\Requirement;
use App\Models\RequirementSubmitted;
use App\Models\User;
use Illuminate\Http\Request;

class Submitted extends Controller
{
    public function Submitted()
    {
        $applicant = User::select('id', 'requirements_done', 'email')->where('requirements_done', true)->get();
        return view('admin.admission');
    }
}
