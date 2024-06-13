<?php

namespace App\Methods;

use App\Models\Information;
use App\Services\Core;

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
    public $address;
    public $civil_status;
    public $email;
    public $secAId = 0;
}

trait SecA
{
    use SecAVar;

    public function SecAGetData()
    {
        $info = Information::where('user_id', $this->user->id)->first();
        if ($info != null) {
            $this->prefix = $info->prefix;
            $this->first_name = $info->first_name;
            $this->middle_name = $info->middle_name;
            $this->last_name = $info->last_name;
            $this->suffix = $info->suffix;
            $this->gender = $info->gender;
            $this->age = $info->age;
            $this->number = $info->number;
            $this->birth_date = $info->birth_date;
            $this->place_birth = $info->birth_place;
            $this->religion = $info->religion;
            $this->civil_status = $info->civil_status;
            $this->email = $this->user->email;
            $this->secAId = $info->id;
        }
    }

    public function SecASetData()
    {
        $data = [
            'gender' => $this->gender,
            'age' => $this->age,
            'birth_date' => $this->birth_date,
            'birth_place' => $this->place_birth,
            'religion' => $this->religion,
            'citizenship' => $this->citizenship,
            'address' => $this->address,
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
