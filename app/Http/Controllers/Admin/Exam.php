<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Score;
use App\Models\Information;
use App\Models\Result;
use App\Models\User;
use App\Services\Core;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Exam extends Controller
{
    public function Exam(Request $request)
    {
        if ($request->isMethod('get')) {
            $users = User::select('id', 'email', 'applicant_no')
                ->where('schedule_done', true)->where('score_done', false)->OrderBy('created_at', 'asc')->get();
            foreach ($users as $value) {
                $result = Result::where('user_id', $value->id)->first();
                // Current date
                $currentDate = Carbon::now()->toDateString();
                if (Carbon::parse($result->date)->isSameDay($currentDate)) {
                    $value['show'] = true;
                } else {
                    $value['show'] = false;
                }

                $info = Information::where('user_id', $value['id'])->first();
                $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
            }
            return view('admin.exam', compact('users'));
        }

        $result = Result::where('user_id', $request->input('id'))->first();

        $score = $request->input('score');

        $stanine = 0;
        if ($score >= 1 && $score <= 5) {
            $stanine = 1;
        } elseif ($score >= 6 && $score <= 10) {
            $stanine = 2;
        } elseif ($score >= 11 && $score <= 15) {
            $stanine = 3;
        } elseif ($score >= 16 && $score <= 20) {
            $stanine = 4;
        } elseif ($score >= 21 && $score <= 25) {
            $stanine = 5;
        } elseif ($score >= 26 && $score <= 30) {
            $stanine = 6;
        } elseif ($score >= 31 && $score <= 35) {
            $stanine = 7;
        } elseif ($score >= 36 && $score <= 40) {
            $stanine = 8;
        } elseif ($score >= 41 && $score <= 45) {
            $stanine = 9;
        }

        $data = [
            'score' => $request->input('score'),
            'total' => 45,
            'stanine' => $stanine
        ];

        Core::Save('Result', $data, $result->id);

        $user = User::find($request->input('id'));
        $user->score_done = true;
        $user->update();

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
        Mail::to($user->email)->send(new Score($applicant_name, $request->input('score'), 45));

        return redirect()->back()->with('success', 'Score successfully submit');
    }
}
