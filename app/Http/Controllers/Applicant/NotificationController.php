<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Mail\Admitted;
use App\Models\Barangay;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Educational;
use App\Models\Guardian;
use App\Models\Information;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Recomended;
use App\Models\Result;
use App\Models\User;
use App\Services\Status;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{

    public function Review(Request $request)
    {
        $user = auth()->user();
        if ($user->status == Status::Review->value || $user->status == status::ReqAccepted->value) {
            if ($request->isMethod('get')) {

                $review_date = $user->review_date;
                return view('applicant.forms.review', compact('review_date'));
            }
        } else
            return redirect()->route('steps');
    }

    public function Schedule(Request $request)
    {
        $user = auth()->user();
        if ($user->status == Status::Scheduled->value) {
            if ($request->isMethod('get')) {
                $sched = Result::select('date', 'hour', 'room')->where('user_id', $user->id)->first();
                return view('applicant.forms.exam_date', compact('sched'));
            }
        } else
            return redirect()->route('steps');
    }
    public function Score(Request $request)
    {
        $user = auth()->user();
        if ($user->status == Status::Evaluation->value) {
            $result = Result::where('user_id', $user->id)->first();
            return view('applicant.forms.result_exam', compact('result'));
        } else
            return redirect()->route('steps');
    }

    public function Evaluation(Request $request)
    {
        $user = auth()->user();

        if ($request->isMethod('get')) {
            if ($user->status == Status::Admitted->value || $user->status == Status::Denied->value) {
                $result = Result::where('user_id', $user->id)->first();
                $course = explode(",", $result->course_id);
                $labelCourse = [];
                foreach ($course as $value) {
                    $courses = Courses::find($value);
                    if ($courses != null) {
                        array_push($labelCourse, $courses->title . ' (' . $courses->acronym . ')');
                    }
                }

                $choice = Choice::where('user_id', $user->id)->first();

                $choices = [$choice->first, $choice->second];
                $reasons = [];

                foreach ($choices as $index => $key) {
                    $courseName = Courses::select('title', 'acronym')->find($key);

                    if ($courseName) {
                        $reasonText = ($index == 0) ? $choice->first_reason : $choice->second_reason;
                        $reasons[] = [$courseName->title . " (" . $courseName->acronym . ")", $reasonText];
                    }
                }

                return view('applicant.forms.result_evaluation', compact('result', 'labelCourse', 'reasons'));
            } else if ($user->status == status::Recommendation->value) {

                $choice = Choice::where('user_id', $user->id)->first();

                $choices = [$choice->first, $choice->second];
                $reasonss = [];

                foreach ($choices as $index => $key) {
                    $courseName = Courses::select('title', 'acronym')->find($key);

                    if ($courseName) {
                        $reasonText = ($index == 0) ? $choice->first_reason : $choice->second_reason;
                        $reasons[] = [$courseName->title . " (" . $courseName->acronym . ")", $reasonText];
                    }
                }

                $recommended = Recomended::where('user_id', $user->id)->first();

                $selected = explode(',', $recommended->course_id);

                $courses = Courses::whereIn('id', $selected)->get();

                return view('applicant.forms.recommend_courses', compact('courses', 'reasons'));
            } else
                return redirect()->route('steps');
        }

        $result = Result::where('user_id', $user->id)->first();
        $result->course_id = $request->input('choice');
        $result->evaluation = true;
        $result->passed = true;
        $result->save();

        $user = User::find($user->id);
        $user->course_admitted_id = $request->input('choice');
        $user->status = Status::Admitted;
        $user->save();

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
        $courses = Courses::find($result->course_id);
        $labelCourse = $courses->title . ' (' . $courses->acronym . ')';

        Mail::to($user->email)->send(new Admitted($user->id, $applicant_name, $user->applicant_no, $labelCourse, $user->student_no));
        return  redirect()->back()->with('success', 'Success');
    }

    public function ApplicantFormGenerate($id)
    {
        $user = User::select('id', 'email', 'applicant_no', 'course_admitted_id')->where('id', $id)->first();
        $info = Information::where('user_id', $user['id'])->first();
        $user['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        $info = Information::where('user_id', $user['id'])->first();
        if ($info != null) {
            $user['applicant_no'] = $user['applicant_no'];
            $user['first_name'] = $info->first_name;
            $user['middle_name'] = $info->middle_name;
            $user['last_name'] = $info->last_name;
            $user['gender'] = $info->gender;
            $user['birth_date'] = $info->birth_date;
            $user['number'] = $info->number;
            $user['place_birth'] = $info->birth_place;
            $prov = Province::find($info->province_id);
            $user['province'] = $prov->name;
            $muni = Municipality::find($info->municipality_id);
            $user['municipality'] = $muni->name;
            $bar = Barangay::find($info->barangay_id);
            $user['barangay'] = $bar->name;
        }
        // SECD
        $guar = Guardian::where('user_id', $user['id'])->first();
        if ($guar != null) {
            $user['f_name'] = $guar->f_name;
            $user['m_name'] = $guar->m_name;
            $user['g_name'] = $guar->g_name;
            $user['f_occupation'] = $guar->f_occupation;
            $user['m_occupation'] = $guar->m_occupation;
            $user['g_occupation'] = $guar->g_occupation;
            $user['m_address'] = $guar->m_address;
            $user['g_address'] = $guar->g_address;
            $user['m_contact'] = $guar->m_contact;
            $user['g_contact'] = $guar->g_contact;
        }

        $user['course'] = Courses::where('id', $user->course_admitted_id)->value('title');



        $pdf = Pdf::loadView('applicant.admission_form_generate_report', ['user' => $user])
            ->setPaper('A4', 'portrait')
            ->setOptions([
                'margin-left' => 0,
                'margin-right' => 0,
                'margin-top' => 10,
                'margin-bottom' => 10,
                // 'imageBasePath' => public_path('images/PSAU_logo.png'),
                'isHtml5ParserEnabled' => true,
                'isPhpEnabled' => true,
                // 'debugPng' => true,
                // 'debugKeepTemp' => true,
                // 'debugCss' => true,

            ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'STUDENT INFORMATION FORM (' . now()->format('Y-m-d') . ').pdf');
    }

    public function EvalResultGenerate($id)
    {
        $user = User::find($id);
        $info = Information::where('user_id', $user->id)->first();
        $result = Result::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
        $courses = Courses::find($result->course_id);
        $labelCourse = $courses->title . ' (' . $courses->acronym . ')';

        $pdf = Pdf::loadView('applicant.generate_report_result_of_evaluation', [
            'applicant_name' => $applicant_name,
            'student_no' => $user->student_no,
            'applicant_no' => $user->applicant_no,
            'program_name' => $labelCourse,
            'id' => $id
        ])
            ->setPaper('A4', 'portrait')
            ->setOptions([
                'margin-left' => 0,
                'margin-right' => 0,
                'margin-top' => 10,
                'margin-bottom' => 10,
            ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'Result_Of_Evaluation.pdf');

        // Mail::to($user->email)->send(new Admitted($user->id, $applicant_name, $user->applicant_no, $labelCourse));
    }
}
