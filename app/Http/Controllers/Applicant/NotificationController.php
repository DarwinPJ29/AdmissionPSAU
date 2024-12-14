<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
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

class NotificationController extends Controller
{

    public function Review(Request $request)
    {
        $status = auth()->user()->status;
        if ($status == Status::Review->value) {
            if ($request->isMethod('get')) {
                return view('applicant.forms.review');
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
    }

    public function ApplicantFormGenerate($id)
    {
        $user = User::select('id', 'email', 'applicant_no')->where('id', $id)->first();
        $info = Information::where('user_id', $user['id'])->first();
        $user['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        $info = Information::where('user_id', $user['id'])->first();
        if ($info != null) {
            $user['first_name'] = $info->first_name;
            $user['middle_name'] = $info->middle_name;
            $user['last_name'] = $info->last_name;
            $user['gender'] = $info->gender;
            $user['birth_date'] = $info->birth_date;
            $user['place_birth'] = $info->birth_place;
            $prov = Province::find($info->province_id);
            $user['province'] = $prov->name;
            $muni = Municipality::find($info->municipality_id);
            $user['municipality'] = $muni->name;
            $bar = Barangay::find($info->barangay_id);
            $user['barangay'] = $bar->name;
        }

        // SECB
        $currentYear = date('Y');
        $choice = Choice::where('user_id', $user['id'])->where('school_year', $currentYear . '-' . ($currentYear + 1))->first();

        if ($choice != null) {
            $course1 = Courses::find($choice->first);
            $course2 = Courses::find($choice->second);
            $user['first_choice'] = $course1->title . ' (' . $course1->acronym . ')';
            $user['second_choice'] = $course2->title . ' (' . $course2->acronym . ')';
            $user['school_year'] = $choice->school_year == '' ? $currentYear . '-' . ($currentYear + 1) : $choice->school_year;
            $user['semester'] = $choice->semester;
            $user['applicant_type'] = $choice->type;
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
        }

        $pdf = Pdf::loadView('applicant.admission_form_generate_report', ['user' => $user,])
            ->setPaper('A4', 'portrait')
            ->setOptions([
                'margin-left' => 0, // Remove left margin
                'margin-right' => 0, // Remove right margin
                'margin-top' => 10, // You can adjust top margin as needed
                'margin-bottom' => 10 // You can adjust bottom margin as needed
            ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'STUDENT INFORMATION FORM (' . now()->format('Y-m-d') . ').pdf');
    }
}
