<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Evaluation as MailEvaluation;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Information;
use App\Models\Requirement;
use App\Models\RequirementSubmitted;
use App\Models\Result;
use App\Models\User;
use App\Services\Core;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Evaluation extends Controller
{
    public function evaluation(Request $request)
    {
        if ($request->isMethod('get')) {
            $users = User::select('id', 'email', 'applicant_no')
                ->where('evaluation', false)->where('score_done', true)->OrderBy('created_at', 'asc')->get();
            foreach ($users as $value) {
                $result = Result::where('user_id', $value->id)->first();
                $value['result'] = [$result->score, $result->total, $result->stanine];
                $info = Information::where('user_id', $value['id'])->first();
                $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

                $choices = Choice::where('user_id', $value->id)->first();
                $course1 = Courses::find($choices->first);
                $course2 = Courses::find($choices->second);
                $value['choices'] = [$course1->title . ' (' . $course1->acronym . ')', $course2->title . ' (' . $course2->acronym . ')'];

                $requirements = Requirement::query();

                switch ($choices->type) {
                    case 1:
                        $requirements = $requirements->where('doctoral', 1)->OrderBy('title', 'ASC')->get();
                        break;
                    case 2:
                        $requirements = $requirements->where('masteral', 1)->OrderBy('title', 'ASC')->get();
                        break;
                    case 3:
                        $requirements = $requirements->where('second_courser', 1)->OrderBy('title', 'ASC')->get();
                        break;
                    case 4:
                        $requirements = $requirements->where('transferee', 1)->OrderBy('title', 'ASC')->get();
                        break;

                    default:
                        $requirements = $requirements->where('freshmen', 1)->OrderBy('title', 'ASC')->get();
                        break;
                }

                $requirementsArray = [];

                foreach ($requirements as $key => $reqVal) {
                    $reqSubmitted = RequirementSubmitted::where('requirement_id', $reqVal->id)
                        ->where('user_id', $value['id'])->first();

                    $reqValArray = [
                        'title' => $reqVal->title,
                        'file' => '',
                        'status' => false,
                        'required' => $reqVal['required']
                    ];

                    if ($reqSubmitted != null) {
                        $reqValArray['file'] = $reqSubmitted->file;
                        $reqValArray['status'] = true;
                    }

                    $requirementsArray[$key] = $reqValArray;
                }

                $value['requirements'] = $requirementsArray;
            }
            return view('admin.evaluation', compact('users'));
        }

        $request->merge([
            'first' => $request->has('first'),
            'second' => $request->has('second'),
        ]);

        $result = Result::where('user_id', $request->id)->first();
        $choice = Choice::where('user_id', $request->id)->first();

        $courseId = '';
        if ($request->first && $request->second) {
            $courseId = $choice->first . ',' . $choice->second;
        } else if ($request->first && !$request->second) {
            $courseId = $choice->first;
        } else {
            $courseId = $choice->second;
        }

        $result->course_id = $courseId;
        $result->evaluation = 1;
        $result->update();

        $user = User::find($request->input('id'));
        $user->evaluation = true;
        $user->status = true;
        $user->update();

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        $course = explode(",", $result->course_id);
        $labelCourse = [];
        foreach ($course as $value) {
            $courses = Courses::find($value);
            if ($courses != null) {
                array_push($labelCourse, $courses->title . ' (' . $courses->acronym . ') is PASSED');
            }
        }

        Mail::to($user->email)->send(new MailEvaluation($applicant_name, $labelCourse));
        return redirect()->back()->with('success', 'Successfully admitted');
    }

    public function Deny($id)
    {
        $result = Result::where('user_id', $id)->first();
        $result->course_id = '';
        $result->evaluation = 0;
        $result->update();

        $user = User::find($id);
        $user->evaluation = true;
        $user->status = false;
        $user->update();

        $choice = Choice::where('user_id', $id)->first();
        $labelCourse  = [];

        $course1 = Courses::find($choice->first);
        if ($course1 != null) {
            array_push($labelCourse, $course1->title . ' (' . $course1->acronym . ') is FAILED');
        }

        $course2 = Courses::find($choice->second);
        if ($course2 != null) {
            array_push($labelCourse, $course2->title . ' (' . $course2->acronym . ') is FAILED');
        }

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        Mail::to($user->email)->send(new MailEvaluation($applicant_name, $labelCourse));
        return redirect()->back()->with('success', 'Successfully Deny');
    }
}
