<?php

namespace App\Livewire;

use App\Methods\SecA;
use App\Methods\SecB;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

trait SecC
{
    public $elementry_name;
    public $elementry_address;
    public $elementry_date;
    public $sr_high_name;
    public $sr_high_address;
    public $sr_high_date;
    public $last_school_name;
    public $last_school_address;
    public $last_school_date;
    public $graduated_from;
    public $date_graduation;
    public $average_grade;
    public $lrn;
    public $first_time_college;
}

trait SecD
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
    public $signature;
}
class AdmissionForm extends Component
{
    public $section = 1;

    use SecA;
    use SecB;
    use SecC;
    use SecD;
    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function Mount()
    {
        $this->SecAGetData();
        $this->SecBGetData();
    }
    public function render()
    {
        return view('livewire.admission-form');
    }
}
