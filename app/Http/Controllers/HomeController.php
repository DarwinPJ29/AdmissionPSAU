<?php

namespace App\Http\Controllers;

use App\Mail\Applicant;
use App\Models\Courses;
use App\Models\Requirement as ModelsRequirement;
use App\Models\Information;
use App\Models\SchoolYear;
use App\Models\User;
use App\Services\Status;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Hash::make(12345));
        $year = date('Y') . '-' . (date('Y') + 1);
        $courses = Courses::all();
        $requirements = ModelsRequirement::all();
        $school_year = SchoolYear::where('year', $year)->first();

        if ($school_year == null) {
            $newSchoolYear = new SchoolYear();
            $newSchoolYear->year =  $year;
            $newSchoolYear->semester = '1st Semester';
            $newSchoolYear->status = true;
            $newSchoolYear->save();

            $school_year = SchoolYear::where('year', $year)->first();
        }

        return view('landingpage.index', compact('courses', 'requirements', 'school_year'));
    }
    public function landingAdmission()
    {
        return view('landingpage.admission');
    }
    public function homes()
    {
        return view('mail.admitted');
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
            $year = date('Y') . '-' . (date('Y') + 1);
            $school_year = SchoolYear::where('year', $year)->first();

            if ($school_year->status == 1)
                return view('landingpage.admission');
            else
                return redirect()->route('index');
        }

        $validated = $request->validate([
            'prefix' => 'nullable|regex:/^[\pL\s]+$/u',
            'firstname' => 'required|regex:/^[\pL\s]+$/u',
            'middlename' => 'nullable|regex:/^[\pL\s]+$/u',
            'lastname' => 'required|regex:/^[\pL\s]+$/u',
            'suffix' => 'nullable|regex:/^[\pL\s.]+$/u',
            'email' => 'required|email|unique:users',
            'number' => 'required|numeric',
        ]);

        $validated['password'] = Str::random(1) . rand(000000, 999999);

        $userCount = User::where('role', 0)->get();
        $currentNumber = Count($userCount) == 0 ? 1 : Count($userCount) + 1;
        $applicantNo = sprintf('PSAU-APP-%04d', $currentNumber);
        $student_no = sprintf('PSAU-STUD-%04d', $currentNumber);

        $user = new User();
        $user->applicant_no = $applicantNo;
        $user->student_no = $student_no;
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->role = 0;
        $user->status = Status::Fillup;
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

    public function dataPrivacy()
    {
        return view('landingpage.dataPrivacy');
    }
}
