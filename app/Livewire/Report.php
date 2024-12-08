<?php

namespace App\Livewire;

use App\Http\Controllers\Admin\Course;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Information;
use App\Models\Result as ModelsResult;
use App\Models\User;
use LDAP\Result;
use Livewire\Component;

class Report extends Component
{
    public $type = "0";
    public $status = "0";
    public $course = "0";
    public $courses;
    public $datas = [];


    public function search()
    {
        $this->datas = [];

        $choices = Choice::select('choices.*', 'questions.question_text')
            ->leftJoin('users', 'users.', '=', 'questions.id')
            ->where('choices.type', intval($this->type))
            ->get();
    }
    public function searchs()
    {
        $this->datas = [];
        if ($this->type != null && ($this->status == null || $this->status == "all")) {
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
        } else if ($this->type == null && ($this->status != "all" && $this->status != null)) {
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
        } else if ($this->type != null && ($this->status != "all" && $this->status != null)) {
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
        } else if ($this->type == null && $this->status == 'all') {
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

    public function Mount()
    {
        $this->courses = Courses::OrderBy('title', 'asc')->get();
    }

    public function render()
    {
        // $this->search();
        return view('livewire.report');
    }
}
