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
                $join->on('course.id', '=', 'user.course_admitted_id')
                    ->where('user.status', '=', '7')
                    ->orWhere(function ($query) {
                        $query->whereColumn('course.id', 'choice.first')
                            ->orWhereColumn('course.id', 'choice.second');
                    });
            })
            ->where(function ($query) {
                $query->when($this->status === '0', function ($query) {
                    $query->whereIn('user.status', [3, 7, 8]);
                })
                    ->when($this->status !== '0', function ($query) {
                        $query->where('user.status', '=', $this->status);
                    });
            })
            ->where(function ($query) {
                $query->when($this->type === '0', function ($query) {
                    $query->whereIn('choice.type', [1, 2, 3, 4, 5]);
                })
                    ->when($this->type !== '0', function ($query) {
                        $query->where('choice.type', '=', $this->type);
                    });
            })
            ->when($this->course !== '0', function ($query) {
                $query->where('course.id', '=', $this->course);
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
                'choice.type'
            ])
            ->get();
    }

    public function Mount()
    {
        $this->courses = Courses::OrderBy('title', 'asc')->get();
        $this->search();
    }

    public function render()
    {
        return view('livewire.report');
    }
}
