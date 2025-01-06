<?php

namespace App\Livewire;

use App\Models\Barangay;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Educational;
use App\Models\Guardian;
use App\Models\Information;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Result as ModelsResult;
use App\Models\SchoolYear;
use App\Models\User;
use App\Services\Status;
use Barryvdh\DomPDF\Facade\Pdf;
use LDAP\Result;
use Livewire\Component;

class Record extends Component
{
    public $users = array();
    public $type = 7;
    public $year;
    public $semester = 1;
    public $school_year_Data = array();

    public function record()
    {
        $this->school_year_Data = [];

        $school_year  = SchoolYear::select('year')->Orderby('created_at', 'desc')->get();
        foreach ($school_year as $key => $value) {
            array_push($this->school_year_Data, $value['year']);
        }
        $users = User::select('users.id', 'users.email', 'users.applicant_no', 'users.date_submitted')
            ->leftJoin('choices', 'choices.user_id', '=', 'users.id') // Assuming the correct relationship is choices.user_id = users.id
            ->where('users.status', intval($this->type))
            ->where('choices.school_year', '=', $this->year)
            ->where('choices.semester', $this->semester)
            ->orderBy('users.created_at', 'asc')
            ->get();

        foreach ($users as $value) {
            $info = Information::where('user_id', $value['id'])->first();
            $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
            $result = ModelsResult::where('user_id', $value['id'])->first();
            $value['show'] = $result->passed;
        }
        $filteredUsers = $users->filter(function ($user) {
            return $user['show'] == 1;
        });

        $filteredUsers = $filteredUsers->values();
        $users = $filteredUsers;

        $this->users = $users;
    }

    public function generate(string $id)
    {
        $user = User::select('id', 'email', 'applicant_no', 'student_no')->where('id', $id)->first();
        $info = Information::where('user_id', $user['id'])->first();
        $user['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
        // SECA
        $info = Information::where('user_id', $user['id'])->first();
        if ($info != null) {
            $user['prefix'] = $info->prefix;
            $user['first_name'] = $info->first_name;
            $user['middle_name'] = $info->middle_name;
            $user['last_name'] = $info->last_name;
            $user['suffix'] = $info->suffix;
            $user['citizenship'] = $info->citizenship;
            $user['gender'] = $info->gender;
            $user['age'] = $info->age;
            $user['number'] = $info->number;
            $user['birth_date'] = $info->birth_date;
            $user['place_birth'] = $info->birth_place;
            $user['religion'] = $info->religion;
            $user['civil_status'] = $info->civil_status;
            $prov = Province::find($info->province_id);
            $user['province'] = $prov->name;
            $muni = Municipality::find($info->municipality_id);
            $user['municipality'] = $muni->name;
            $bar = Barangay::find($info->barangay_id);
            $user['barangay'] = $bar->name;
        }

        // SECB
        $currentYear = date('Y');
        $choice = Choice::where('user_id', $user['id'])->where('school_year', $this->year)->first();

        if ($choice != null) {
            $course1 = Courses::find($choice->first);
            $course2 = Courses::find($choice->second);
            $user['first_choice'] = $course1->title . ' (' . $course1->acronym . ')';
            $user['second_choice'] = $course2->title . ' (' . $course2->acronym . ')';
            $user['school_year'] = $choice->school_year == '' ? $currentYear . '-' . ($currentYear + 1) : $choice->school_year;
            $user['semester'] = $choice->semester;
            $user['applicant_type'] = $choice->type;
        }

        // SECC
        $educ = Educational::where('user_id', $user['id'])->first();
        if ($educ != null) {
            $user['elem_name'] = $educ->elem_name;
            $user['elem_address'] = $educ->elem_address;
            $user['elem_date'] = $educ->elem_date;
            $user['high_name'] = $educ->high_name;
            $user['high_address'] = $educ->high_address;
            $user['high_date'] = $educ->high_date;
            $user['attended_name'] = $educ->attended_name;
            $user['attended_address'] = $educ->attended_address;
            $user['attended_date'] = $educ->attended_date;
            $user['shs_from'] = $educ->shs_from;
            $user['shs_date'] = $educ->shs_date;
            $user['shs_average'] = $educ->shs_average;
            $user['lrn'] = $educ->lrn;
            $user['first_time'] = $educ->first_time;
        }

        // SECD
        $guar = Guardian::where('user_id', $user['id'])->first();
        if ($guar != null) {
            $user['f_name'] = $guar->f_name;
            $user['m_name'] = $guar->m_name;
            $user['g_name'] = $guar->g_name;
            $user['f_birth'] = $guar->f_birth;
            $user['m_birth'] = $guar->m_birth;
            $user['g_birth'] = $guar->g_birth;
            $user['f_attainment'] = $guar->f_attainment;
            $user['m_attainment'] = $guar->m_attainment;
            $user['g_attainment'] = $guar->g_attainment;
            $user['f_occupation'] = $guar->f_occupation;
            $user['m_occupation'] = $guar->m_occupation;
            $user['g_occupation'] = $guar->g_occupation;
            $user['f_address'] = $guar->f_address;
            $user['m_address'] = $guar->m_address;
            $user['g_address'] = $guar->g_address;
            $user['f_income'] = $guar->f_income;
            $user['m_income'] = $guar->m_income;
            $user['g_income'] = $guar->g_income;
            $user['f_contact'] = $guar->f_contact;
            $user['m_contact'] = $guar->m_contact;
            $user['g_contact'] = $guar->g_contact;
        }

        $pdf = Pdf::loadView('admin.generate_report_admission_form', ['user' => $user])
            ->setPaper('A4', 'portrait')
            ->setOptions([
                'margin-left' => 0, // Remove left margin
                'margin-right' => 0, // Remove right margin
                'margin-top' => 10, // You can adjust top margin as needed
                'margin-bottom' => 10,
            ]);
        $this->record();
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $user['applicant_no'] . '_Admission_Form.pdf');
    }

    public function Mount()
    {
        $this->record();
    }

    public function render()
    {
        return view('livewire.record');
    }
}
