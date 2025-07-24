<?php

namespace App\Livewire;

use App\Http\Controllers\Admin\College;
use App\Models\College as ModelsCollege;
use App\Models\SchoolYear;
use App\Models\User;
use App\Services\Status;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{

    public $school_year;
    public $sem;
    public $status = true;
    public $colleges = [
        '1' => 0,
        '2' => 0,
        '3' => 0,
    ];
    public $pie_chart = [
        '1' => 0,
        '2' => 0,
        '3' => 0,
        '4' => 0,
        '5' => 0
    ];

    public $programs = [];

    public array $undergradLabels = [];
    public array $undergradCounts = [];
    public array $gradLabels = [];
    public array $gradCounts = [];

    public function Programs()
    {
        $programs  = DB::table('colleges as college')
            ->join('courses as course', 'course.college_id', '=', 'college.id')
            ->join('choices as choice', 'choice.first', '=', 'course.id')
            ->select(
                'college.level',
                'course.title as CourseName',
                'course.acronym',
                DB::raw('COUNT(choice.first) as ChoiceCount')
            )
            ->where('choice.school_year', $this->school_year)
            ->groupBy('course.id', 'course.title', 'college.level', 'course.acronym')
            ->orderByDesc('course.acronym')
            ->get();

        // Split undergrad and grad
        $undergrad = $programs->where('level', 1);
        $grad = $programs->where('level', '!=', 1);

        $this->undergradLabels = $undergrad->map(fn($p) => $p->acronym . ' - ' . $p->ChoiceCount)->toArray();
        $this->undergradCounts = $undergrad->pluck('ChoiceCount')->toArray();

        $this->gradLabels = $grad->map(fn($p) => $p->acronym . ' - ' . $p->ChoiceCount)->toArray();
        $this->gradCounts = $grad->pluck('ChoiceCount')->toArray();
    }

    public function Colleges()
    {
        $colleges = ModelsCollege::all();

        foreach ($colleges as $key => $value) {
            switch ($value->level) {
                case 1:
                    $this->colleges[1]++;
                    break;
                case 2:
                    $this->colleges[2]++;
                    break;
                default:
                    $this->colleges[3]++;
                    break;
            }
        }
    }

    public function SchoolYear()
    {
        $school_year = SchoolYear::where('year', $this->school_year)->first();

        if (!$school_year) {
            $newSchoolYear = new SchoolYear();
            $newSchoolYear->year =  $this->school_year;
            $newSchoolYear->semester = '1st Semester';
            $newSchoolYear->status = true;
            $newSchoolYear->save();


            $this->sem = $newSchoolYear->semester;
            $this->status = $newSchoolYear->status;
        } else {
            $this->sem = $school_year->semester;
            $this->status = $school_year->status;
        }
    }
    public function semester()
    {
        $school_year = SchoolYear::where('year', $this->school_year)->first();

        if ($school_year) {
            $school_year->semester = $this->sem;
            $school_year->save();

            $this->SchoolYear();
        }
    }

    public function statuses()
    {
        $school_year = SchoolYear::where('year', $this->school_year)->first();

        if ($school_year) {
            $school_year->status = $this->status;
            $school_year->save();

            $this->SchoolYear();
        }
    }

    public function pieChart()
    {
        $users = User::where('role', 0)->get();
        foreach ($users as $value) {
            switch ($value->status) {
                case Status::Review->value:
                    $this->pie_chart[1]++;
                    break;
                case Status::Evaluation->value:
                    $this->pie_chart[2]++;
                    break;
                case Status::Recommendation->value:
                    $this->pie_chart[4]++;
                    break;
                case Status::Admitted->value:
                    $this->pie_chart[3]++;
                    break;
                case Status::Denied->value:
                    $this->pie_chart[5]++;
                    break;
                default:
                    break;
            }
        }
    }

    public function Mount()
    {
        $this->school_year =  date('Y') . '-' . (date('Y') + 1);
        $this->SchoolYear();
        $this->pieChart();
        $this->Colleges();
        $this->Programs();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
