<?php

namespace App\Livewire;

use App\Models\Information;
use App\Models\Result as ModelsResult;
use App\Models\SchoolYear;
use App\Models\User;
use App\Services\Status;
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
            ->when(!empty($this->year), function ($query) {
                $query->where('choices.school_year', '=', $this->year); // Correctly using $this->year
            })
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


    public function Mount()
    {
        $this->record();
    }

    public function render()
    {
        return view('livewire.record');
    }
}
