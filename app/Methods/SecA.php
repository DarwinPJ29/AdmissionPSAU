<?php

namespace App\Methods;

use App\Models\Barangay;
use App\Models\Information;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\User;
use App\Services\Core;
use Carbon\Carbon;

trait SecAVar
{
    public $prefix;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $gender;
    public $number;
    public $birth_date;
    public $age;
    public $place_birth;
    public $citizenship;
    public $religion;
    public $civil_status;
    public $email;
    public $secAId = 0;
    public $province;
    public $municipality;
    public $barangay;
    public $provinces;
    public $municipalities;
    public $barangays;
    public $applicant_no;
    public $minDate;
}

trait SecA
{
    use SecAVar;

    public function SecAGetData()
    {
        $this->minDate = now()->subYears(15)->format('Y-m-d');
        $this->applicant_no = User::where('id', $this->user->id)->first();

        $info = Information::where('user_id', $this->user->id)->first();
        if ($info != null) {
            $this->prefix = $info->prefix;
            $this->first_name = $info->first_name;
            $this->middle_name = $info->middle_name;
            $this->last_name = $info->last_name;
            $this->suffix = $info->suffix;
            $this->gender = $info->gender;
            $this->birth_date = $info->birth_date;
            $this->age = (!empty($this->birth_date) && Carbon::hasFormat($this->birth_date, 'Y-m-d'))
                ? (Carbon::now()->year - Carbon::createFromFormat('Y-m-d', $this->birth_date)->year -
                    (Carbon::now()->lt(Carbon::createFromFormat('Y-m-d', $this->birth_date)->addYears(Carbon::now()->year - Carbon::createFromFormat('Y-m-d', $this->birth_date)->year)) ? 1 : 0))
                : 0;
            $this->citizenship = $info->citizenship;
            $this->number = $info->number;
            $this->birth_date = $info->birth_date;
            $this->place_birth = $info->birth_place;
            $this->religion = $info->religion;
            $this->civil_status = $info->civil_status;
            $this->province = $info->province_id;
            $this->municipality = $info->municipality_id;
            $this->barangay = $info->barangay_id;
            $this->email = $this->user->email;
            $this->secAId = $info->id;
        }

        if ($this->province != '' || $this->province != null) {
            $this->provinces = Province::OrderBy('name', 'asc')->get();
            $this->municipalities =  Municipality::where('province_id', $this->province)->OrderBy('name', 'asc')->get();
        } else {
            $this->provinces = Province::OrderBy('name', 'asc')->get();
            $this->municipalities = [];
        }

        if ($this->municipality != '' || $this->municipality != null) {
            $this->barangays = Barangay::where('municipality_id', $this->municipality)->OrderBy('name', 'asc')->get();
        } else {
            $this->barangays = [];
        }
    }

    public function SecASetData()
    {
        $data = [
            'gender' => $this->gender,
            'birth_date' => $this->birth_date,
            'age' => (!empty($this->birth_date) && Carbon::hasFormat($this->birth_date, 'Y-m-d'))
                ? (Carbon::now()->year - Carbon::createFromFormat('Y-m-d', $this->birth_date)->year -
                    (Carbon::now()->lt(Carbon::createFromFormat('Y-m-d', $this->birth_date)->addYears(Carbon::now()->year - Carbon::createFromFormat('Y-m-d', $this->birth_date)->year)) ? 1 : 0))
                : 0,
            'birth_place' => $this->place_birth,
            'religion' => $this->religion,
            'citizenship' => $this->citizenship,
            'province_id' => $this->province,
            'municipality_id' => $this->municipality,
            'barangay_id' => $this->barangay,
            'civil_status' => $this->civil_status,
        ];
        Core::Save('Information', $data, $this->secAId);

        $this->SecAGetData();
    }

    public function SecANext()
    {
        $this->section = 2;

        // if (
        //     $this->gender ==  '' &&
        //     $this->age ==  '' &&
        //     $this->birth_date ==  '' &&
        //     $this->place_birth ==  '' &&
        //     $this->religion ==  '' &&
        //     $this->citizenship ==  '' &&
        //     $this->civil_status ==  '' &&
        //     $this->address ==  ''
        // ) {
        //     $this->section = 2;
        // } else {
        //     session()->flash('failed', 'Please compelete the fields to proceed!');
        // }
    }
}
