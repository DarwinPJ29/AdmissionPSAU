<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Evaluation as MailEvaluation;
use App\Mail\Recommended;
use App\Models\Choice;
use App\Models\College;
use App\Models\Courses;
use App\Models\Information;
use App\Models\Recomended;
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

        $result = Result::where('user_id', $request->id)->first();
        $choice = Choice::where('user_id', $request->id)->first();

        $courseId = '';
        if ($request->choice == 'first') {
            $courseId = $choice->first;
        } else {
            $courseId = $choice->second;
        }

        $result->course_id = $courseId;
        $result->evaluation = 1;
        $result->passed = 1;
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

        // Mail::to($user->email)->send(new MailEvaluation($applicant_name, $labelCourse));
        return redirect()->back()->with('success', 'Successfully admitted');
    }

    public function Recommended(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $user = User::find($id);
            $info = Information::where('user_id', $user->id)->first();
            $name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

            $choice = Choice::where('user_id', $user->id)->first();

            $colleges = College::orderBy('level', 'desc');

            if ($choice->type == 1) {
                $colleges->where('level', 3);
                // doctoral = 3
            } elseif ($choice->type == 2) {
                $colleges->where('level', 2);
                // masteral = 2
            } else {
                $colleges->where('level', '!=', 3)->where('level', '!=', 2);
            }

            $colleges = $colleges->get();

            $collegeIds = $colleges->pluck('id')->toArray();
            $selectedCourse = [$choice->first, $choice->second];

            $courses = Courses::select('id', 'title', 'college_id')
                ->whereIn('college_id', $collegeIds)
                ->whereNotIn('id', $selectedCourse)
                ->orderBy('title', 'asc')
                ->get();

            return view('admin.recommended', compact('id', 'courses', 'name'));
        }

        $recommend = new Recomended();
        $recommend->user_id = $id;
        $recommend->course_id = implode(',', $request->input('courses'));
        $recommend->save();

        $choice = Result::where('user_id', $id)->first();
        $choice->evaluation = false;
        $choice->update();

        $user = User::find(auth()->user()->id);
        $user->evaluation = true;
        $user->update();

        $info = Information::where('user_id', $user->id)->first();
        $name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        Mail::to($user->email)->send(new Recommended($name));

        return redirect()->route('evaluation')->with('success', 'Recommended Course Successfully Submitted');
    }

    public function Deny($id)
    {
        $result = Result::where('user_id', $id)->first();
        $result->course_id = '';
        $result->evaluation = 1;
        $result->passed = 0;
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
