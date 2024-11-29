<?php

namespace App\Methods;

use App\Models\Choice;
use App\Models\College;
use App\Models\Courses;
use App\Services\Core;

trait SecBVar
{
    public $courses_choice1;
    public $courses_choice2;
    public $first_choice;
    public $second_choice;
    public $school_year;
    public $semester;
    public $applicant_type;
    public $choiceId = 0;
}
trait SecB
{
    use SecBVar;
    public function SecBGetData()
    {
        $currentYear = date('Y');
        $choice = Choice::where('user_id', $this->user->id)->where('school_year', $currentYear . '-' . ($currentYear + 1))->first();
        if ($choice != null) {
            $this->first_choice = $choice->first;
            $this->second_choice = $choice->second;
            $this->school_year = $choice->school_year == '' ? $currentYear . '-' . ($currentYear + 1) : $choice->school_year;
            $this->semester = $choice->semester;
            $this->applicant_type = $choice->type;
            $this->choiceId = $choice->id;
        } else {
            $this->school_year = $currentYear . '-' . ($currentYear + 1);
        }

        $colleges = College::orderBy('level', 'desc')->where('enable', 1);

        if ($this->applicant_type == 1) {
            $colleges->where('level', 3);
            // doctoral = 3
        } elseif ($this->applicant_type == 2) {
            $colleges->where('level', 2);
            // masteral = 2
        } else {
            $colleges->where('level', '!=', 3)->where('level', '!=', 2);
        }

        $colleges = $colleges->get();

        $collegeIds = $colleges->pluck('id')->toArray();

        $query1 = Courses::select('id', 'title', 'college_id')
            ->whereIn('college_id', $collegeIds)
            ->orderBy('title', 'asc');

        if (!is_null($this->second_choice) || $this->second_choice != '') {
            $query1->whereNotIn('id', [$this->second_choice]);
        }

        $this->courses_choice1 = $query1->get();

        $query2 = Courses::select('id', 'title', 'college_id')
            ->whereIn('college_id', $collegeIds)
            ->orderBy('title', 'asc');

        if (!is_null($this->first_choice) && $this->first_choice !== '') {
            $query2->whereNotIn('id', [$this->first_choice]);
        }

        $this->courses_choice2 = $query2->get();
    }

    public function SecBSetData()
    {
        $choice = Choice::find($this->choiceId);

        if ($choice != null) {
            if ($choice->type != $this->applicant_type) {
                $this->first_choice = '';
                $this->second_choice = '';
            }
        }

        $data  = [
            'user_id' => $this->user->id,
            'first' => $this->first_choice,
            'second' => $this->second_choice,
            'semester' => $this->semester,
            'first' => $this->first_choice,
            'school_year' => $this->school_year,
            'type' => $this->applicant_type,
        ];


        Core::Save('Choice', $data, $this->choiceId);
        $this->SecBGetData();
    }
    public function SecBNext()
    {
        $this->section = 3;
        // if (
        //     $this->first_choice != '' &&
        //     $this->second_choice != '' &&
        //     $this->semester != ''
        // ) {
        //     $this->section = 3;
        // }
    }
    public function SecBPrev()
    {
        $this->section = 1;
    }
}