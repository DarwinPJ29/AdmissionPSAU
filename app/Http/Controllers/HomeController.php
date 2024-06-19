<?php

namespace App\Http\Controllers;

use App\Mail\Applicant;
use App\Models\Courses;
use App\Models\Requirement as ModelsRequirement;
use App\Models\Information;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Hash::make(12345));
        $courses = Courses::all();
        $requirements = ModelsRequirement::all();
        return view('landingpage.index', compact('courses', 'requirements'));
    }
    public function landingAdmission()
    {
        return view('landingpage.admission');
    }
    public function notif()
    {
        return view('landingpage.notif');
    }
    public function question()
    {
        return view('applicant_question.sectionA');
    }

    public function ApplyNow(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('landingpage.admission');
        }

        $validated = $request->validate([
            'prefix' => 'nullable|regex:/^[\pL\s]+$/u',
            'firstname' => 'required|regex:/^[\pL\s]+$/u',
            'middlename' => 'nullable|regex:/^[\pL\s]+$/u',
            'lastname' => 'required|regex:/^[\pL\s]+$/u',
            'suffix' => 'nullable|regex:/^[\pL\s]+$/u',
            'email' => 'required|email|unique:users',
            'number' => 'required|numeric',
        ]);

        $validated['password'] = Str::random(1) . rand(000000, 999999);

        $user = new User();
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->role = 0;
        $user->save();

        $user_information = new Information();
        $user_information->user_id = $user->id;
        $user_information->prefix = $validated['prefix'];
        $user_information->first_name = $validated['firstname'];
        $user_information->middle_name = $validated['middlename'];
        $user_information->last_name = $validated['lastname'];
        $user_information->suffix = $validated['suffix'];
        $user_information->number = $validated['number'];
        $user_information->save();

        $applicant_name = $user_information->first_name . " " . $user_information->middle_name . " " . $user_information->last_name;
        Mail::to($user->email)->send(new Applicant(
            $user->id,
            $applicant_name,
            $validated['password'],
        ));

        return redirect()->route('notif');
    }
}
