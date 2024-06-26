<?php

namespace App\Methods;

use App\Models\Choice;
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

        $this->courses_choice1 = Courses::select('id', 'title')
            ->whereNotIn('id', [$this->second_choice])
            ->orderBy('title', 'asc')
            ->get();

        $this->courses_choice2 = Courses::select('id', 'title')
            ->whereNotIn('id', [$this->first_choice])
            ->orderBy('title', 'asc')
            ->get();
    }


    public function SecBSetData()
    {
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
