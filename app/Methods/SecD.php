<?php

namespace App\Methods;

use App\Models\Guardian;
use App\Services\Core;

trait SecDVar
{
    public $father_fullname;
    public $mother_fullname;
    public $guardian_fullname;
    public $father_date_birth;
    public $mother_date_birth;
    public $guardian_date_birth;
    public $father_education;
    public $mother_education;
    public $guardian_education;
    public $father_occupation;
    public $mother_occupation;
    public $guardian_occupation;
    public $father_company;
    public $mother_company;
    public $guardian_company;
    public $father_income;
    public $mother_income;
    public $guardian_income;
    public $father_contact;
    public $mother_contact;
    public $guardian_contact;
    public $secDId = 0;
}
trait SecD
{
    use SecDVar;

    public function SecDGetData()
    {
        $guar = Guardian::where('user_id', $this->user->id)->first();
        if ($guar != null) {
            $this->father_fullname = $guar->f_name;
            $this->mother_fullname = $guar->m_name;
            $this->guardian_fullname = $guar->g_name;
            $this->father_date_birth = $guar->f_birth;
            $this->mother_date_birth = $guar->m_birth;
            $this->guardian_date_birth = $guar->g_birth;
            $this->father_education = $guar->f_attainment;
            $this->mother_education = $guar->m_attainment;
            $this->guardian_education = $guar->g_attainment;
            $this->father_occupation = $guar->f_occupation;
            $this->mother_occupation = $guar->m_occupation;
            $this->guardian_occupation = $guar->g_occupation;
            $this->father_company = $guar->f_address;
            $this->mother_company = $guar->m_address;
            $this->guardian_company = $guar->g_address;
            $this->father_income = $guar->f_income;
            $this->mother_income = $guar->m_income;
            $this->guardian_income = $guar->g_income;
            $this->father_contact = $guar->f_contact;
            $this->mother_contact = $guar->m_contact;
            $this->guardian_contact = $guar->g_contact;
            $this->secDId = $guar->id;
        }
    }

    public function SecDSetData()
    {
        $data = [
            'user_id' => $this->user->id,
            'f_name' => $this->father_fullname,
            'm_name' => $this->mother_fullname,
            'g_name' => $this->guardian_fullname,
            'f_birth' => $this->father_date_birth,
            'm_birth' => $this->mother_date_birth,
            'g_birth' => $this->guardian_date_birth,
            'f_attainment' => $this->father_education,
            'm_attainment' => $this->mother_education,
            'g_attainment' => $this->guardian_education,
            'f_occupation' => $this->father_occupation,
            'm_occupation' => $this->mother_occupation,
            'g_occupation' => $this->guardian_occupation,
            'f_address' => $this->father_company,
            'm_address' => $this->mother_company,
            'g_address' => $this->guardian_company,
            'f_income' => $this->father_income,
            'm_income' => $this->mother_income,
            'g_income' => $this->guardian_income,
            'f_contact' => $this->father_contact,
            'm_contact' => $this->mother_contact,
            'g_contact' => $this->guardian_contact,
        ];
        Core::Save('Guardian', $data, $this->secDId);
        $this->SecDGetData();
    }

    public function SecDNext()
    {
        $this->section = 5;
        // if (
        //     $this->first_choice != '' &&
        //     $this->second_choice != '' &&
        //     $this->semester != ''
        // ) {
        //     $this->section = 3;
        // }
    }
    public function SecdPrev()
    {
        $this->section = 3;
    }
}
