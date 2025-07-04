<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Admitted;
use App\Mail\Denied;
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
use App\Services\Status;
use Carbon\Carbon;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Evaluation extends Controller
{
    public function evaluation(Request $request)
    {
        if ($request->isMethod('get')) {
            $users = User::select('id', 'email', 'applicant_no')->where('status', Status::Evaluation->value)->where('role', 0)->OrderBy('created_at', 'asc')->get();
            foreach ($users as $value) {
                $result = Result::where('user_id', $value->id)->first();
                $value['result'] = [$result->score, $result->total, $result->stanine];
                $info = Information::where('user_id', $value['id'])->first();
                $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

                $choices = Choice::where('user_id', $value->id)->first();
                $value['isFirstDeny'] = $choices->isFirstDeny;

                if ($choices->isFirstDeny == 0) {
                    $course1 = Courses::find($choices->first);
                    $value['show'] = $course1->id == auth()->user()->college_to_evaluate ? 1 : 0;
                    $value['choices'] = [$course1->title . ' (' . $course1->acronym . ')'];
                } else {
                    $course1 = Courses::find($choices->second);
                    $value['show'] = $course1->id == auth()->user()->college_to_evaluate ? 1 : 0;
                    $value['choices'] = [$course1->title . ' (' . $course1->acronym . ')'];
                }
                // $course2 = Courses::find($choices->second);
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
                        $reqValArray['file_name'] = $reqSubmitted->file_name;
                        $reqValArray['status'] = true;
                    } else {
                        $reqValArray['file'] = "";
                        $reqValArray['file_name'] = "";
                        $reqValArray['status'] = false;
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
        $user->course_admitted_id = $courseId;
        $user->status = Status::Admitted;
        $user->update();

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
        $courses = Courses::find($result->course_id);
        $labelCourse = $courses->title . ' (' . $courses->acronym . ')';

        Mail::to($user->email)->send(new Admitted($user->id, $applicant_name, $user->applicant_no, $labelCourse, $user->student_no));

        return redirect()->back()->with('success', 'Successfully admitted');
    }

    public function Recommended(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->isMethod('get')) {
            $info = Information::where('user_id', $user->id)->first();
            $name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

            $choice = Choice::where('user_id', $user->id)->first();
            $isFirstDeny = $choice->isFirstDeny;

            $choices = [$choice->isFirstDeny == 0 ? $choice->first : $choice->second => ""];
            $choicesNew = [];
            foreach ($choices as $key => $value) {
                $courseName = Courses::select('title', 'acronym')->find($key);
                array_push($choicesNew, $courseName->title . " (" . $courseName->acronym . ")");
            }

            $colleges = College::orderBy('level', 'desc')->where('enable', 1);

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
                ->where('enable', 1)
                ->whereIn('college_id', $collegeIds)
                ->whereNotIn('id', $selectedCourse)
                ->orderBy('title', 'asc')
                ->get();

            return view('admin.recommended', compact('id', 'courses', 'name', 'choicesNew', 'isFirstDeny'));
        }

        $recommend = new Recomended();
        $recommend->user_id = $id;
        $recommend->course_id = implode(',', $request->input('courses'));
        $recommend->save();

        $appChoice = Choice::where('user_id', $user->id)->first();
        $appChoice->second_reason = $request->input('reason_2');
        $appChoice->save();

        $choice = Result::where('user_id', $id)->first();
        $choice->evaluation = false;
        $choice->update();

        $user->status = Status::Recommendation;
        $user->update();

        $info = Information::where('user_id', $user->id)->first();
        $name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        $selected = explode(',', $recommend->course_id);

        $recomendeds = Courses::whereIn('id', $selected)->get();

        $choice = Choice::where('user_id', $user->id)->first();

        $choices = [$choice->first, $choice->second];

        foreach ($choices as $index => $key) {
            $courseName = Courses::select('title', 'acronym')->find($key);

            if ($courseName) {
                $reasonText = ($index == 0) ? $choice->first_reason : $choice->second_reason;
                $reasons[] = [$courseName->title . " (" . $courseName->acronym . ")", $reasonText];
            }
        }

        Mail::to($user->email)->send(new Recommended($name, $user->applicant_no, $reasons, $recomendeds));

        return redirect()->route('evaluation')->with('success', 'Recommended Course Successfully Submitted');
    }

    public function Deny(Request $request, $id)
    {
        $user = User::find($id);
        $choicesNew = [];
        if ($request->isMethod('get')) {
            $info = Information::where('user_id', $user->id)->first();
            $name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

            $choice = Choice::where('user_id', $user->id)->first();

            $isFirstDeny = $choice->isFirstDeny;

            $choices = [$choice->isFirstDeny == 0 ? $choice->first : $choice->second => ""];

            foreach ($choices as $key => $value) {
                $courseName = Courses::select('title', 'acronym')->find($key);
                array_push($choicesNew, $courseName->title . " (" . $courseName->acronym . ")");
            }

            return view('admin.deny', compact('id', 'name', 'choicesNew', 'isFirstDeny'));
        }

        $info = Information::where('user_id', $user->id)->first();
        $applicant_name = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

        $choice = Choice::where('user_id', $user->id)->first();

        $isFirstDeny = $choice->isFirstDeny;

        $appChoice = Choice::where('user_id', $user->id)->first();
        if ($appChoice->isFirstDeny == 0) {
            $appChoice->first_reason = $request->input('reason_1');
        } else
            $appChoice->second_reason = $request->input('reason_2');

        $appChoice->save();

        $choices = [$choice->first, $choice->second];

        if ($isFirstDeny == 0) {
            $choice->isFirstDeny = 1;
            $choice->save();
        } else {

            $result = Result::where('user_id', $id)->first();
            $result->course_id = '';
            $result->evaluation = 1;
            $result->passed = 0;
            $result->update();

            $user = User::find($id);
            $user->status = Status::Denied;
            $user->update();
        }

        foreach ($choices as $index => $key) {
            $courseName = Courses::select('title', 'acronym')->find($key);
            if ($courseName) {
                $reasonText = ($index == 0) ? $choice->first_reason : $choice->second_reason;
                $reasons[] = [$courseName->title . " (" . $courseName->acronym . ")", $reasonText];
            }
        }

        if ($isFirstDeny == 1)
            Mail::to($user->email)->send(new Denied($applicant_name, $user->applicant_no, $reasons, $string = implode(', ', $choicesNew)));

        return redirect()->route('evaluation')->with('success', 'Successfully Deny');
    }
}
