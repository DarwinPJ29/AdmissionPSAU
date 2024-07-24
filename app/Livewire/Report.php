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
    public $status;
    public $datas = [];

    public function search()
    {
        if ($this->status == 'all') {
            $this->status = null;
        }

        $this->datas = [];
        if ($this->type != null && $this->status == null) {
            $results = ModelsResult::all();
            foreach ($results as $val) {
                $value = [];
                $choice = Choice::where('user_id', $val['user_id'])->first();
                if ($choice->type == $this->type) {
                    $info = Information::where('user_id', $val['user_id'])->first();
                    $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
                    $info = Information::where('user_id', $val['user_id'])->first();
                    if ($info != null) {
                        $value['prefix'] = $info->prefix;
                        $value['first_name'] = $info->first_name;
                        $value['middle_name'] = $info->middle_name;
                        $value['last_name'] = $info->last_name;
                        $value['suffix'] = $info->suffix;
                        $value['gender'] = $info->gender;
                    }

                    $result = ModelsResult::where('user_id', $val['user_id'])->first();

                    $course = Courses::find($result->course_id);

                    $value['course'] = $course->title . ' (' . $course->acronym . ')';

                    array_push($this->datas, $value);
                }
            }
        } else if ($this->type == null && $this->status != null) {
            $results = ModelsResult::all();
            foreach ($results as $val) {
                $value = [];
                $choice = Choice::where('user_id', $val['user_id'])->first();
                if ($val['passed'] == $this->status) {
                    $info = Information::where('user_id', $val['user_id'])->first();
                    $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
                    $info = Information::where('user_id', $val['user_id'])->first();
                    if ($info != null) {
                        $value['prefix'] = $info->prefix;
                        $value['first_name'] = $info->first_name;
                        $value['middle_name'] = $info->middle_name;
                        $value['last_name'] = $info->last_name;
                        $value['suffix'] = $info->suffix;
                        $value['gender'] = $info->gender;
                    }

                    $result = ModelsResult::where('user_id', $val['user_id'])->first();

                    $course = Courses::find($result->course_id);

                    $value['course'] = $course->title . ' (' . $course->acronym . ')';

                    array_push($this->datas, $value);
                }
            }
        } else if ($this->type != null && $this->status != null) {
            $results = ModelsResult::all();
            foreach ($results as $val) {
                $value = [];
                $choice = Choice::where('user_id', $val['user_id'])->first();
                if ($choice->type == $this->type &&  $val['passed'] == $this->status) {
                    $info = Information::where('user_id', $val['user_id'])->first();
                    $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
                    $info = Information::where('user_id', $val['user_id'])->first();
                    if ($info != null) {
                        $value['prefix'] = $info->prefix;
                        $value['first_name'] = $info->first_name;
                        $value['middle_name'] = $info->middle_name;
                        $value['last_name'] = $info->last_name;
                        $value['suffix'] = $info->suffix;
                        $value['gender'] = $info->gender;
                    }

                    $result = ModelsResult::where('user_id', $val['user_id'])->first();

                    $course = Courses::find($result->course_id);

                    $value['course'] = $course->title . ' (' . $course->acronym . ')';

                    array_push($this->datas, $value);
                }
            }
        } else {
            $results = ModelsResult::all();
            foreach ($results as $val) {
                $value = [];
                $choice = Choice::where('user_id', $val['user_id'])->first();

                $info = Information::where('user_id', $val['user_id'])->first();
                $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
                $info = Information::where('user_id', $val['user_id'])->first();
                if ($info != null) {
                    $value['prefix'] = $info->prefix;
                    $value['first_name'] = $info->first_name;
                    $value['middle_name'] = $info->middle_name;
                    $value['last_name'] = $info->last_name;
                    $value['suffix'] = $info->suffix;
                    $value['gender'] = $info->gender;
                }

                $result = ModelsResult::where('user_id', $val['user_id'])->first();

                $course = Courses::find($result->course_id);

                $value['course'] = $course->title . ' (' . $course->acronym . ')';

                array_push($this->datas, $value);
            }
        }
    }

    public function render()
    {
        // $this->search();
        return view('livewire.report');
    }
}
