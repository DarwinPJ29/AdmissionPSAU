<?php

namespace App\Livewire;

use App\Http\Controllers\Admin\Course;
use App\Models\Courses;
use App\Models\SchoolYear;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Report extends Component
{
    public $type = "0";
    public $status = "0";
    public $course = "0";
    public $courses;
    public $year;
    public $semester = 1;
    public $datas = array();
    public $school_year_Data = array();


    public function search()
    {
        $this->datas = [];
        $this->school_year_Data = [];

        $school_year  = SchoolYear::select('year')->Orderby('created_at', 'desc')->get();
        foreach ($school_year as $key => $value) {
            array_push($this->school_year_Data, $value['year']);
        }

        $this->datas = DB::table('users as user')
            ->leftJoin('information as info', 'info.user_id', '=', 'user.id')
            ->leftJoin('choices as choice', 'choice.user_id', '=', 'user.id')
            ->leftJoin('courses as course', function ($join) {
                $join->on('course.id', '=', 'user.course_admitted_id')
                    ->where('user.status', '=', 7)
                    ->orWhere(function ($query) {
                        $query->when(DB::raw('choice.isFirstDeny') == '0', function ($query) {
                            $query->whereColumn('course.id', 'choice.first');
                        }, function ($query) {
                            $query->whereColumn('course.id', 'choice.second');
                        });
                    });
            })
            ->where(function ($query) {
                $query->when($this->status === '0', function ($query) {
                    $query->whereIn('user.status', [3, 7, 8]);
                }, function ($query) {
                    $query->where('user.status', '=', $this->status);
                });
            })
            ->where(function ($query) {
                $query->when($this->type === '0', function ($query) {
                    $query->whereIn('choice.type', [1, 2, 3, 4, 5]);
                }, function ($query) {
                    $query->where('choice.type', '=', $this->type);
                });
            })
            ->when($this->course !== '0', function ($query) {
                $query->where('course.id', '=', $this->course);
            })
            ->when(!empty($this->year), function ($query) {
                $query->where('choice.school_year', '=', $this->year);
            })
            ->when(!empty($this->semester), function ($query) {
                $query->where('choice.semester', '=', $this->semester);
            })
            ->select([
                'user.id',
                'user.applicant_no',
                'user.email',
                'user.status',
                DB::raw("CONCAT(info.first_name, 
                CASE 
                    WHEN info.middle_name IS NOT NULL AND info.middle_name != '' 
                    THEN CONCAT(' ', UPPER(SUBSTRING(info.middle_name, 1, 1)), '.')
                    ELSE ''
                END, 
                ' ', info.last_name) as name"),
                'course.title',
                'course.acronym',
                'choice.type'
            ])
            ->get();
    }

    public function generate()
    {
        if (count($this->datas) > 0) {
            $typeLabels = [
                "0" => 'All',
                "1" => 'Doctoral',
                "2" => 'Masteral',
                "3" => 'Second Courser',
                "4" => 'Transferee',
                "5" => 'Freshmen',
            ];

            $statusLabels = [
                "0" => 'All',
                "3" => 'Submitted',
                "7" => 'Admitted',
                "8" => 'Denied',
            ];

            $semester = [
                1 => '1st Semester',
                2 => '2nd Semester'
            ];

            $course = "All";
            if ($this->course != "0") {
                $course_find = Courses::find($this->course);
                $course = $course_find->title . ' (' . $course_find->acronym . ')';
            }

            $headers = [
                "Applicant List Reports",
                now()->format('F d, Y'),
                $typeLabels[$this->type],
                $course,
                $statusLabels[$this->status],
                $this->year,
                $semester[$this->semester]
            ];
            $pdf = Pdf::loadView('admin.generate_report_template', ['datas' => $this->datas, 'headers' => $headers])
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'margin-left' => 0, // Remove left margin
                    'margin-right' => 0, // Remove right margin
                    'margin-top' => 10, // You can adjust top margin as needed
                    'margin-bottom' => 10,
                ]);

            return response()->streamDownload(function () use ($pdf) {
                echo $pdf->output();
            }, 'Applicant List Report (' . now()->format('Y-m-d') . ').pdf');
        }
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
