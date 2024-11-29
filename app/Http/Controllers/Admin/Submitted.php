<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Returned;
use App\Mail\Sched;
use App\Models\Barangay;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Educational;
use App\Models\Guardian;
use App\Models\Information;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Requirement;
use App\Models\RequirementSubmitted;
use App\Models\Result;
use App\Models\User;
use App\Services\Core;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Submitted extends Controller
{
    public function Submitted()
    {
        $users = User::select('id', 'email', 'applicant_no')->where('requirements_done', true)
            ->where('schedule_done', false)->OrderBy('created_at', 'asc')->get();
        foreach ($users as $value) {
            $info = Information::where('user_id', $value['id'])->first();
            $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;

            // SECA
            $info = Information::where('user_id', $value['id'])->first();
            if ($info != null) {
                $value['prefix'] = $info->prefix;
                $value['first_name'] = $info->first_name;
                $value['middle_name'] = $info->middle_name;
                $value['last_name'] = $info->last_name;
                $value['suffix'] = $info->suffix;
                $value['citizenship'] = $info->citizenship;
                $value['gender'] = $info->gender;
                $value['age'] = $info->age;
                $value['number'] = $info->number;
                $value['birth_date'] = $info->birth_date;
                $value['place_birth'] = $info->birth_place;
                $value['religion'] = $info->religion;
                $value['civil_status'] = $info->civil_status;
                $prov = Province::find($info->province_id);
                $value['province'] = $prov->name;
                $muni = Municipality::find($info->municipality_id);
                $value['municipality'] = $muni->name;
                $bar = Barangay::find($info->barangay_id);
                $value['barangay'] = $bar->name;
            }

            // SECB
            $currentYear = date('Y');
            $choice = Choice::where('user_id', $value['id'])->where('school_year', $currentYear . '-' . ($currentYear + 1))->first();

            if ($choice != null) {
                $course1 = Courses::find($choice->first);
                $course2 = Courses::find($choice->second);
                $value['first_choice'] = $course1->title . ' (' . $course1->acronym . ')';
                $value['second_choice'] = $course2->title . ' (' . $course2->acronym . ')';
                $value['school_year'] = $choice->school_year == '' ? $currentYear . '-' . ($currentYear + 1) : $choice->school_year;
                $value['semester'] = $choice->semester;
                $value['applicant_type'] = $choice->type;
            }

            // SECC
            $educ = Educational::where('user_id', $value['id'])->first();
            if ($educ != null) {
                $value['elem_name'] = $educ->elem_name;
                $value['elem_address'] = $educ->elem_address;
                $value['elem _date'] = $educ->elem_date;
                $value['high_name'] = $educ->high_name;
                $value['high_address'] = $educ->high_address;
                $value['high_date'] = $educ->high_date;
                $value['attended_name'] = $educ->attended_name;
                $value['attended_address'] = $educ->attended_address;
                $value['attended_date'] = $educ->attended_date;
                $value['shs_from'] = $educ->shs_from;
                $value['shs_date'] = $educ->shs_date;
                $value['shs_average'] = $educ->shs_average;
                $value['lrn'] = $educ->lrn;
                $value['first_time'] = $educ->first_time;
            }

            // SECD
            $guar = Guardian::where('user_id', $value['id'])->first();
            if ($guar != null) {
                $value['f_name'] = $guar->f_name;
                $value['m_name'] = $guar->m_name;
                $value['g_name'] = $guar->g_name;
                $value['f_birth'] = $guar->f_birth;
                $value['m_birth'] = $guar->m_birth;
                $value['g_birth'] = $guar->g_birth;
                $value['f_attainment'] = $guar->f_attainment;
                $value['m_attainment'] = $guar->m_attainment;
                $value['g_attainment'] = $guar->g_attainment;
                $value['f_occupation'] = $guar->f_occupation;
                $value['m_occupation'] = $guar->m_occupation;
                $value['g_occupation'] = $guar->g_occupation;
                $value['f_address'] = $guar->f_address;
                $value['m_address'] = $guar->m_address;
                $value['g_address'] = $guar->g_address;
                $value['f_income'] = $guar->f_income;
                $value['m_income'] = $guar->m_income;
                $value['g_income'] = $guar->g_income;
                $value['f_contact'] = $guar->f_contact;
                $value['m_contact'] = $guar->m_contact;
                $value['g_contact'] = $guar->g_contact;
            }

            // REQUIREMENT
            $requirements = Requirement::query();

            switch ($value['applicant_type']) {
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
                }

                $requirementsArray[$key] = $reqValArray;
            }

            $value['requirements'] = $requirementsArray;
        }
        return view('admin.admission', compact('users'));
    }

    public function Returned(Request $request, $id)
    {
        $deadline = Carbon::parse($request->input('deadline'));
        $formattedDeadline = $deadline->format('F j, Y');
        $user = User::find($id);
        $user->requirements_done = 0;
        $user->requirements_remarks = $request->input('reason') . '.Please resubmit your requirements until ' . $formattedDeadline;
        $user->update();

        $user_information = Information::where('user_id', $user->id)->first();
        $applicant_name = $user_information->first_name . " " . $user_information->middle_name . " " . $user_information->last_name;

        Mail::to($user->email)->send(new Returned($applicant_name, $user->requirements_remarks));

        return redirect()->back()->with('success', 'Requirements Successfully returned');
    }

    public function Schedule(Request $request, $id)
    {
        $hour = Carbon::createFromFormat('H:i', $request->input('exam_time'))->format('h:i A');
        $day = Carbon::parse($request->input('exam_date'));
        $date = $day->format('F j, Y');

        $user = User::find($id);
        $user->schedule_done = 1;
        $user->update();

        $result = Result::where('user_id', $user->id)->first();
        $data = [
            'user_id' => $user->id,
            'room' => $request->input('room'),
            'date' => $date,
            'hour' => $hour,
        ];

        Core::Save('Result', $data, $result == null ? 0 : $result->id);

        $user_information = Information::where('user_id', $user->id)->first();
        $applicant_name = $user_information->first_name . " " . $user_information->middle_name . " " . $user_information->last_name;

        Mail::to($user->email)->send(new Sched($user->applicant_no, $applicant_name, $date . ' ' . $hour, $request->input('room')));
        return redirect()->back()->with('success', 'Schdule for exam has been successfully assigned');
    }
}