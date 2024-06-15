<?php

namespace App\Methods;

use App\Models\Educational;
use App\Services\Core;

trait SecCVar
{
    public $elementary_name;
    public $elementary_address;
    public $elementary_date;
    public $sr_high_name;
    public $sr_high_address;
    public $sr_high_date;
    public $last_school_name;
    public $last_school_address;
    public $last_school_date;
    public $graduated_from;
    public $date_graduation;
    public $shs_average;
    public $lrn;
    public $first_time_college;
    public $secCId = 0;
}


trait SecC
{
    use SecCVar;

    public function SecCGetData()
    {
        $educ = Educational::where('user_id', $this->user->id)->first();
        if ($educ != null) {
            $this->elementary_name = $educ->elem_name;
            $this->elementary_address = $educ->elem_address;
            $this->elementary_date = $educ->elem_date;
            $this->sr_high_name = $educ->high_name;
            $this->sr_high_address = $educ->high_address;
            $this->sr_high_date = $educ->high_date;
            $this->last_school_name = $educ->attended_name;
            $this->last_school_address = $educ->attended_address;
            $this->last_school_date = $educ->attended_date;
            $this->graduated_from = $educ->shs_from;
            $this->date_graduation = $educ->shs_date;
            $this->shs_average = $educ->shs_average;
            $this->lrn = $educ->lrn;
            $this->first_time_college = $educ->first_time;
            $this->secCId = $educ->id;
        }
    }

    public function SecCSetData()
    {
        $data = [
            'user_id' => $this->user->id,
            'elem_name' => $this->elementary_name,
            'elem_address' => $this->elementary_address,
            'elem_date' => $this->elementary_date,
            'high_name' => $this->sr_high_name,
            'high_address' => $this->sr_high_address,
            'high_date' => $this->sr_high_date,
            'attended_name' => $this->last_school_name,
            'attended_address' => $this->last_school_address,
            'attended_date' => $this->last_school_date,
            'shs_from' => $this->graduated_from,
            'shs_date' => $this->date_graduation,
            'shs_average' => $this->shs_average,
            'lrn' => $this->lrn,
            'first_time' => $this->first_time_college,
        ];

        Core::Save('Educational', $data, $this->secCId);
        $this->SecCGetData();
    }

    public function SecCNext()
    {
        $this->section = 4;
        // if (
        //     $this->first_choice != '' &&
        //     $this->second_choice != '' &&
        //     $this->semester != ''
        // ) {
        //     $this->section = 3;
        // }
    }
    public function SecCPrev()
    {
        $this->section = 2;
    }
}
