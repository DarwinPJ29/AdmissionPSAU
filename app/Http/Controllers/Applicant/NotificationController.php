<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Recomended;
use App\Models\Result;
use App\Models\User;
use App\Services\Status;
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
}
