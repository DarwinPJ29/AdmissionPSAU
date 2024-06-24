<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function Review(Request $request)
    {
        $user = auth()->user();
        if ($user->schedule_done) {
            return redirect()->route('reviews');
        }

        if ($request->isMethod('get')) {
            return view('applicant.forms.review');
        }
    }
    public function Schedule(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('applicant.forms.exam_date');
        }
    }
    public function Score(Request $request)
    {
        // if ($request->isMethod('get')) {
        //     return view('');
        // }
    }
    public function Evaluation(Request $request)
    {
        // if ($request->isMethod('get')) {
        //     return view('');
        // }
    }
    public function Status(Request $request)
    {
        // if ($request->isMethod('get')) {
        //     return view('');
        // }
    }
}
