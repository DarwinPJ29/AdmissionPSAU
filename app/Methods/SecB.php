<?php

namespace App\Methods;

use App\Models\Choice;
use App\Models\College;
use App\Models\Courses;
use App\Models\SchoolYear;
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
    public $applicant_level = 1;
    public $choiceId = 0;
}
trait SecB
{
    use SecBVar;
    public function SecBGetData()
    {
        $year = date('Y') . '-' . (date('Y') + 1);
        $school_year = SchoolYear::where('year', $year)->first();

        $this->school_year = $school_year->year;
        $this->semester = $school_year->semester;

        $choice = Choice::where('user_id', $this->user->id)->where('school_year', $school_year->year)->first();
        if ($choice != null) {
            $this->first_choice = $choice->first;
            $this->second_choice = $choice->second;
            $this->applicant_type = $choice->type;
            $this->choiceId = $choice->id;
            $this->applicant_level = $choice->level;
        } else {
            $this->school_year = $school_year->year;
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
            ->where('enable', 1)
            ->whereIn('college_id', $collegeIds)
            ->orderBy('title', 'asc');

        if (!is_null($this->second_choice) || $this->second_choice != '') {
            $query1->whereNotIn('id', [$this->second_choice]);
        }

        $this->courses_choice1 = $query1->get();

        $query2 = Courses::select('id', 'title', 'college_id')
            ->where('enable', 1)
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
            'semester' => $this->semester == "1st Semester" ? 1 : 2,
            'first' => $this->first_choice,
            'school_year' => $this->school_year,
            'type' => $this->applicant_type,
            'level' => $this->applicant_level,
        ];

        Core::Save('Choice', $data, $this->choiceId);
        $this->SecBGetData();
    }
    public function SecBNext()
    {
        $properties = [
            $this->courses_choice1,
            $this->courses_choice2,
            $this->first_choice,
            $this->second_choice,
            $this->school_year,
            $this->semester,
            $this->applicant_type,
            $this->applicant_level,
            $this->choiceId,
        ];

        $hasEmptyOrNull = array_filter($properties, fn($value) => $value === null || $value === '') !== [];

        if ($hasEmptyOrNull) {
            session()->flash('failed', 'Please compelete the fields to proceed!');
        } else {
            $this->section = 3;
        }
    }
    public function SecBPrev()
    {
        $this->section = 1;
    }
}
