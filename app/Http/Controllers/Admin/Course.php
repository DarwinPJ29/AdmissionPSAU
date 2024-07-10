<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Course extends Controller
{
    public function courses(Request $request)
    {
        if ($request->isMethod('get')) {
            $courses = Courses::all();
            foreach ($courses as $value) {
                $col = College::select('title', 'acronym')->where('id', $value['college_id'])->first();
                $value['course_title'] = $col->title;
                $value['course_acronym'] = $col->acronym;
            }
            $colleges = College::orderBy('level', 'asc')->get();
            foreach ($colleges as $val) {
                if ($val['level'] == 1)
                    $val['level'] = 'Under Graduate';
                else if ($val['level'] == 2)
                    $val['level'] = "Masteral";
                else
                    $val['level'] = "Doctoral";
            }

            return view('admin.courses', compact('courses', 'colleges'));
        }

        $course = Courses::where('title', $request->course_title)->where('acronym', $request->course_acronym)->where('college_id', $request->college_id)->first();

        if ($course != null) {
            return redirect()->back()->with('failed', 'Course or Acronym is already exist');
        } else {
            $validated = $request->validate([
                'file' => 'required|image|mimes:jpg,png,jpeg|max:2048'
            ]);

            if ($request->hasFile('file')) {

                $image = $validated['file'];
                $imageName = $image->hashName();
                Storage::disk('public')->put('courses', $image);
                $valid['file'] = $imageName;

                $course = new Courses();
                $course->college_id = $request->college_id;
                $course->title = $request->course_title;
                $course->acronym = $request->course_acronym;
                $course->description = $request->course_desc;
                $course->file = $valid['file'];

                $course->save();
                return redirect()->back()->with('success', 'Course Successfully Added');
            }
        }
    }

    public function coursesUpdate(Request $request, $id)
    {
        $course = Courses::find($id);
        if ($course != null) {

            if ($request->file('file') != null) {

                $validated = $request->validate([
                    'file' => 'required|image|mimes:jpg,png,jpeg|max:2048'
                ]);

                if ($request->hasFile('file')) {
                    unlink(public_path() . '/storage/courses/' . $course->file);

                    $image = $validated['file'];
                    $imageName = $image->hashName();
                    Storage::disk('public')->put('courses', $image);
                    $valid['file'] = $imageName;
                    $course->college_id = $request->college_id;
                    $course->title = $request->course_title;
                    $course->acronym = $request->course_acronym;
                    $course->description = $request->course_desc;
                    $course->file = $valid['file'];
                    $course->update();
                    return redirect()->back()->with('success', 'Course Successfully Updated');
                }
            } else {
                $course->college_id = $request->college_id;
                $course->title = $request->course_title;
                $course->acronym = $request->course_acronym;
                $course->description = $request->course_desc;
                $course->update();
                return redirect()->back()->with('success', 'Course Successfully Updated');
            }
        }
    }

    public function courseDelete($id)
    {
        $course = Courses::find($id);
        if ($course != null) {
            unlink(public_path() . '/storage/courses/' . $course->file);

            Courses::destroy($id);
            return redirect()->back()->with('success', 'Course Successfully Deleted');
        }
    }
}
