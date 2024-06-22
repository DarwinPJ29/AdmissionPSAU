<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barangay;
use App\Models\Choice;
use App\Models\Educational;
use App\Models\Guardian;
use App\Models\Information;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Requirement;
use App\Models\RequirementSubmitted;
use App\Models\User;
use Illuminate\Http\Request;

class Submitted extends Controller
{
    public function Submitted()
    {
        $users = User::select('id', 'email', 'applicant_no')->where('requirements_done', true)->OrderBy('created_at', 'asc')->get();
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
                $value['first_choice'] = $choice->first;
                $value['second_choice'] = $choice->second;
                $value['school_year'] = $choice->school_year == '' ? $currentYear . '-' . ($currentYear + 1) : $choice->school_year;
                $value['semester'] = $choice->semester;
                $value['applicant_type'] = $choice->type;
            }

            // SECC
            $educ = Educational::where('user_id', $value['id'])->first();
            if ($educ != null) {
                $value['elementary_name'] = $educ->elem_name;
                $value['elementary_address'] = $educ->elem_address;
                $value['elementary_date'] = $educ->elem_date;
                $value['sr_high_name'] = $educ->high_name;
                $value['sr_high_address'] = $educ->high_address;
                $value['sr_high_date'] = $educ->high_date;
                $value['last_school_name'] = $educ->attended_name;
                $value['last_school_address'] = $educ->attended_address;
                $value['last_school_date'] = $educ->attended_date;
                $value['graduated_from'] = $educ->shs_from;
                $value['date_graduation'] = $educ->shs_date;
                $value['shs_average'] = $educ->shs_average;
                $value['lrn'] = $educ->lrn;
                $value['first_time_college'] = $educ->first_time;
            }

            // SECD
            $guar = Guardian::where('user_id', $value['id'])->first();
            if ($guar != null) {
                $value['father_fullname'] = $guar->f_name;
                $value['mother_fullname'] = $guar->m_name;
                $value['guardian_fullname'] = $guar->g_name;
                $value['father_date_birth'] = $guar->f_birth;
                $value['mother_date_birth'] = $guar->m_birth;
                $value['guardian_date_birth'] = $guar->g_birth;
                $value['father_education'] = $guar->f_attainment;
                $value['mother_education'] = $guar->m_attainment;
                $value['guardian_education'] = $guar->g_attainment;
                $value['father_occupation'] = $guar->f_occupation;
                $value['mother_occupation'] = $guar->m_occupation;
                $value['guardian_occupation'] = $guar->g_occupation;
                $value['father_company'] = $guar->f_address;
                $value['mother_company'] = $guar->m_address;
                $value['guardian_company'] = $guar->g_address;
                $value['father_income'] = $guar->f_income;
                $value['mother_income'] = $guar->m_income;
                $value['guardian_income'] = $guar->g_income;
                $value['father_contact'] = $guar->f_contact;
                $value['mother_contact'] = $guar->m_contact;
                $value['guardian_contact'] = $guar->g_contact;
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
                    $reqValArray['status'] = true;
                }

                $requirementsArray[$key] = $reqValArray;
            }

            $value['requirements'] = $requirementsArray;
        }
        return view('admin.admission', compact('users'));
    }
}
