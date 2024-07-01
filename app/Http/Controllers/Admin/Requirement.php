<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Requirement as ModelsRequirement;
use Illuminate\Http\Request;

class Requirement extends Controller
{
    public function requirement(Request $request)
    {
        if ($request->isMethod('get')) {
            $requirements = ModelsRequirement::all();
            return view('admin.requirements', compact('requirements'));
        }
        $request->merge([
            'doctoral' => $request->has('doctoral'),
            'masteral' => $request->has('masteral'),
            'second_courser' => $request->has('second_courser'),
            'freshmen' => $request->has('freshmen'),
            'transferee' => $request->has('transferee'),
        ]);

        if (
            !$request->masteral && !$request->doctoral && !$request->tranferee && !$request->freshmen
            && !$request->second_courser
        ) {
            return redirect()->back()->with('failed', 'Requirement for must select atleast one');
        }

        $requirement = ModelsRequirement::where('title', $request->requirement)->first();

        if ($requirement != null) {
            return redirect()->back()->with('failed', 'Requirement is already exist');
        } else {
            $requirement = new ModelsRequirement();
            $requirement->title = $request->requirement;
            $requirement->masteral = $request->masteral;
            $requirement->doctoral = $request->doctoral;
            $requirement->transferee = $request->transferee;
            $requirement->freshmen = $request->freshmen;
            $requirement->second_courser = $request->second_courser;
            $requirement->required = (int)$request->required;
            $requirement->save();
            return redirect()->back()->with('success', 'Requirement Successfully Added');
        }
    }

    public function requirementUpdate(Request $request, $id)
    {
        $request->merge([
            'doctoral' => $request->has('doctoral'),
            'masteral' => $request->has('masteral'),
            'second_courser' => $request->has('second_courser'),
            'freshmen' => $request->has('freshmen'),
            'transferee' => $request->has('transferee'),
        ]);
        if (
            !$request->masteral && !$request->doctoral && !$request->tranferee && !$request->freshmen
            && !$request->second_courser
        ) {
            return redirect()->back()->with('failed', 'Requirement for must select atleast one');
        }

        $requirement = ModelsRequirement::find($id);
        if ($requirement != null) {
            $requirement->title = $request->requirement;
            $requirement->masteral = $request->masteral;
            $requirement->doctoral = $request->doctoral;
            $requirement->transferee = $request->transferee;
            $requirement->freshmen = $request->freshmen;
            $requirement->second_courser = $request->second_courser;
            $requirement->required = (int)$request->required;
            $requirement->update();
            return redirect()->back()->with('success', 'Requirement Successfully Updated');
        }
    }

    public function requirementDelete($id)
    {
        $requirement = ModelsRequirement::find($id);
        if ($requirement != null) {
            ModelsRequirement::destroy($id);
            return redirect()->back()->with('success', 'Requirement Successfully Deleted');
        }
    }
}
