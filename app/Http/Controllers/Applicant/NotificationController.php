<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Recomended;
use App\Models\Result;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function Review(Request $request)
    {
        $user = auth()->user();
        if ($user->schedule_done) {
            return redirect()->route('schedule');
        }

        if ($request->isMethod('get')) {
            return view('applicant.forms.review');
        }
    }
    public function Schedule(Request $request)
    {
        $user = auth()->user();
        if (!$user->score_done) {
            if ($request->isMethod('get')) {
                $sched = Result::select('date', 'hour', 'room')->where('user_id', $user->id)->first();
                return view('applicant.forms.exam_date', compact('sched'));
            }
        }

        return redirect()->route('score');
    }
    public function Score(Request $request)
    {
        $user = auth()->user();
        $result = Result::where('user_id', $user->id)->first();
        if (!$user->mail_done &&  $user->score_done) {
            $result = Result::where('user_id', $user->id)->first();
            return view('applicant.forms.result_exam', compact('result'));
        }

        return redirect()->route('evaluate');
    }
    public function Evaluation(Request $request)
    {
        if ($request->isMethod('get')) {
            if (auth()->user()->evaluation) {
                $result = Result::where('user_id', auth()->user()->id)->first();
                if ($result->evaluation) {
                    if (auth()->user()->mail_done) {
                        $course = explode(",", $result->course_id);
                        $labelCourse = [];
                        foreach ($course as $value) {
                            $courses = Courses::find($value);
                            if ($courses != null) {
                                array_push($labelCourse, $courses->title . ' (' . $courses->acronym . ')');
                            }
                        }
                        return view('applicant.forms.result_evaluation', compact('result', 'labelCourse'));
                    } else {
                        return redirect()->route('loading');
                    }
                } else {
                    $recommended = Recomended::where('user_id', auth()->user()->id)->first();

                    $selected = explode(',', $recommended->course_id);

                    $courses = Courses::whereIn('id', $selected)->get();

                    return view('applicant.forms.recommend_courses', compact('courses'));
                }
            } else {
                return redirect()->route('loading');
            }
        }

        $result = Result::where('user_id', auth()->user()->id)->first();
        $result->course_id = $request->input('choice');
        $result->evaluation = true;
        $result->passed = true;
        $result->save();

        return redirect()->route('loading');
    }
}
