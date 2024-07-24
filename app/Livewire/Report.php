<?php

namespace App\Livewire;

use App\Models\Choice;
use App\Models\Courses;
use App\Models\Information;
use App\Models\Result as ModelsResult;
use App\Models\User;
use LDAP\Result;
use Livewire\Component;

class Report extends Component
{
    public $type;
    public $admitted;
    public $denied;
    public $data;

    public function search()
    {
        if ($this->type != null && $this->admitted == null && $this->denied == null) {

            $users = User::select('id')->where('activated', true)->where('role', 0)->get();

            foreach ($users as $value) {
                $info = Information::where('user_id', $value['id'])->first();
                $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
                $info = Information::where('user_id', $value['id'])->first();
                if ($info != null) {
                    $value['prefix'] = $info->prefix;
                    $value['first_name'] = $info->first_name;
                    $value['middle_name'] = $info->middle_name;
                    $value['last_name'] = $info->last_name;
                    $value['suffix'] = $info->suffix;
                    $value['gender'] = $info->gender;
                }

                $result = ModelsResult::where('user_id', $value['id'])->first();

                $course = Courses::find($result->course_id);

                $value['course'] = $course->title . ' (' . $course->acronym . ')';
            }
        }
    }

    public function render()
    {
        return view('livewire.report');
    }
}
