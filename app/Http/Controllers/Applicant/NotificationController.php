<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
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
        if ($user->schedule_done) {

            if ($request->isMethod('get')) {
                $sched = Result::select('date', 'hour')->where('user_id', $user->id)->first();
                return view('applicant.forms.exam_date', compact('sched'));
            }
        } {
            return view('applicant.forms.review');
        }
    }
    public function Score(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('applicant.forms.result_exam');
        }
    }
    public function Evaluation(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('applicant.forms.result_evaluation');
        }
    }
    public function Status(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('applicant.forms.status');
        }
    }
}
