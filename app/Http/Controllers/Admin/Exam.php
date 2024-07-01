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

        $data = [
            'score' => $request->input('score'),
            'total' => $request->input('total'),
        ];

        Core::Save('Result', $data, $result->id);

        $user = User::find($request->input('id'));
        $user->score_done = true;
        $user->update();

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
        Mail::to($user->email)->send(new Score($applicant_name, $request->input('score'), $request->input('total')));

        return redirect()->back()->with('success', 'Score successfully submit');
    }
}
