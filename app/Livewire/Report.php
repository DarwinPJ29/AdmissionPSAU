<?php

namespace App\Livewire;

use App\Http\Controllers\Admin\Course;
use App\Models\Choice;
use App\Models\Courses;
use App\Models\Information;
use App\Models\Result as ModelsResult;
use App\Models\User;
use App\Services\Status;
use Illuminate\Support\Facades\DB;
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

        $this->datas = DB::table('users as user')
            ->leftJoin('information as info', 'info.user_id', '=', 'user.id')
            ->leftJoin('choices as choice', 'choice.user_id', '=', 'user.id')
            ->leftJoin('courses as course', function ($join) {
                $join->on(DB::raw('CASE WHEN user.status = "3" THEN course.id = user.course_admitted_id ELSE course.id IN (choice.first, choice.second) END'));
            })
            ->where(function ($query) {
                $query->where(function ($query) {
                    // Conditional logic for user.status
                    if ($this->status === '0') {
                        $query->whereIn('user.status', [3, 7, 8]); // Apply whereIn when status is 0
                    } else {
                        $query->where('user.status', '=', $this->status); // Apply where otherwise
                    }
                })
                    ->where(function ($query) {
                        // Conditional logic for choice.type
                        if ($this->type === '0') {
                            $query->whereIn('choice.type', [1, 2, 3, 4, 5]); // Apply whereIn when type is 0
                        } else {
                            $query->where('choice.type', '=', $this->type); // Apply where for other types
                        }
                    });
            })
            ->when($this->course !== '0', function ($query) {
                $query->where('course.id', '=', $this->course); // Use class property
            })
            ->select([
                'user.id',
                'user.applicant_no',
                'user.email',
                'user.status',
                'info.prefix',
                'info.first_name',
                'info.middle_name',
                'info.last_name',
                'info.suffix',
                'course.title',
                'course.acronym',
            ])
            ->get();


        dd($this->datas);
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
        $this->search();
    }

    public function render()
    {
        // $this->search();
        return view('livewire.report');
    }
}
