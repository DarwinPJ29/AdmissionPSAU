<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College as ModelsCollege;
use Illuminate\Http\Request;

class College extends Controller
{
    public function College(Request $request)
    {
        if ($request->isMethod('get')) {
            $colleges = ModelsCollege::orderBy('level', 'asc')->get();

            foreach ($colleges as $val) {
                if ($val['level'] == 1)
                    $val['level'] = 'Under Graduate';
                else if ($val['level'] == 2)
                    $val['level'] = "Masteral";
                else
                    $val['level'] = "Doctoral";
            }

            return view('admin.courses', compact('colleges'));
        }

        $college = ModelsCollege::where('title', $request->college_title)->orWhere('acronym', $request->college_acronym)->where('level', $request->level)->first();
        $level = '';
        if ($college != null) {
            if ($request->level == 1)
                $level = 'Under Graduate';
            else if ($request->level == 2)
                $level = "Masteral";
            else
                $level = "Doctoral";
            return redirect()->back()->with('failed', 'College is already exist at level of ' . $level);
        } else {

            $college = new ModelsCollege();
            $college->title = $request->college_title;
            $college->acronym = $request->college_acronym;
            $college->level = $request->level;
            $college->save();
            return redirect()->back()->with('success', 'College Successfully Added');
        }
    }

    public function CollegeUpdate(Request $request, $id)
    {
        $college = ModelsCollege::find($id);
        if ($college != null) {
            $exist = ModelsCollege::where('title', $request->college_title)->orWhere('acronym', $request->college_acronym)->where('level', $request->level)->where('id', '!=', $college->id)->first();
            $level = '';
            if ($exist != null) {
                if ($request->level == 1)
                    $level = 'Under Graduate';
                else if ($request->level == 2)
                    $level = "Masteral";
                else
                    $level = "Doctoral";
                return redirect()->back()->with('failed', 'College is already exist at level of ' . $level);
            } else {
                $college->title = $request->college_title;
                $college->acronym = $request->college_acronym;
                $college->level = $request->level;
                $college->update();
                return redirect()->back()->with('success', 'College Successfully Updated');
            }
        }
    }

    public function CollegeDeleted($id)
    {
        $college = ModelsCollege::find($id);
        if ($college != null) {
            ModelsCollege::destroy($id);
            return redirect()->back()->with('success', 'College Successfully Deleted');
        }
    }
}
