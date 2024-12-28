<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Evaluation;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Information;
use App\Models\Result;
use App\Models\User;
use App\Services\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Record extends Controller
{
    public function records()
    {
        return view('admin.records');
    }

    public function SendMail()
    {
        $users = User::where('evaluation', true)
            ->where('mail_done', false)
            ->get();

        if (count($users) > 0) {
            foreach ($users as $val) {
                $result = Result::where('user_id', $val['id'])->first();
                $choice = Choice::where('user_id', $val['id'])->first();

                $info = Information::where('user_id', $val['id'])->first();
                $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

                $course = explode(",", $result->course_id);
                $labelCourse = [];
                foreach ($course as $value) {
                    $courses = Courses::find($value);
                    if ($courses != null) {
                        array_push($labelCourse, $courses->title . ' (' . $courses->acronym . ') is PASSED');
                    }
                }
                $user = User::find($val['id']);
                $user->mail_done = 1;
                $user->update();

                // Mail::to($user->email)->send(new Evaluation($applicant_name, $labelCourse));
            }
            return redirect()->back()->with('success', 'Email has been sent to the applicants. ');
        } else {
            return redirect()->back()->with('info', 'All applicant already recieved the email. ');
        }
    }
    public function denied()
    {
        $users = User::select('id', 'email', 'applicant_no')->where('status', Status::Denied)
            ->OrderBy('created_at', 'asc')->get();

        foreach ($users as $value) {
            $info = Information::where('user_id', $value['id'])->first();
            $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
            $result = Result::where('user_id', auth()->user()->id)->first();
            $value['show'] = $result->passed;
        }
        $filteredUsers = $users->filter(function ($user) {
            return $user['show'] == 0;
        });
        $filteredUsers = $filteredUsers->values();
        $users = $filteredUsers;

        return view('admin.tabs.denied_list', compact('users'));
    }
    public function recommend()
    {
        $users = User::select('id', 'email', 'applicant_no')->where('status', Status::Recommendation)
            ->OrderBy('created_at', 'asc')->get();

        foreach ($users as $value) {
            $info = Information::where('user_id', $value['id'])->first();
            $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
            $value['show'] = 1;
        }

        return view('admin.tabs.recommended_list', compact('users'));
    }
}
