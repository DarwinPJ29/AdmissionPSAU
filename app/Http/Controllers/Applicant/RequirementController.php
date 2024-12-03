<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Mail\FormDone;
use App\Models\Choice;
use App\Models\Information;
use App\Models\Requirement;
use App\Models\RequirementSubmitted;
use App\Models\User;
use App\Services\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RequirementController extends Controller
{
    public function Requirement(Request $request)
    {
        $user = auth()->user();

        if ($user->status == Status::Requirement->value) {
            if ($request->isMethod('get')) {
                $applicant_type = Choice::where('user_id', auth()->user()->id)->first();
                $requirements = Requirement::query();
                $totalRequired = [0 => 0, 1 => 0];
                $canSubmit = false;
                $remarks = auth()->user()->requirements_remarks;

                switch ($applicant_type->type) {
                    case 1:
                        $requirements = $requirements->where('doctoral', 1)->OrderBy('title', 'ASC')->get();
                        break;
                    case 2:
                        $requirements = $requirements->where('masteral', 1)->OrderBy('title', 'ASC')->get();
                        break;
                    case 3:
                        $requirements = $requirements->where('second_courser', 1)->OrderBy('title', 'ASC')->get();
                        break;
                    case 4:
                        $requirements = $requirements->where('transferee', 1)->OrderBy('title', 'ASC')->get();
                        break;

                    default:
                        $requirements = $requirements->where('freshmen', 1)->OrderBy('title', 'ASC')->get();
                        break;
                }

                $requirements = $requirements->filter(function ($requirement) {
                    return $requirement->enable == 1;
                });

                foreach ($requirements as $value) {
                    if ($value['required'])
                        $totalRequired[0]++;

                    $reqSubmitted = RequirementSubmitted::where('requirement_id', $value->id)->where('user_id', auth()->user()->id)->first();
                    $value['file'] = '';
                    $value['status'] = false;
                    if ($reqSubmitted != null) {
                        $value['file'] = $reqSubmitted->file;
                        $value['file_name'] = $reqSubmitted->file_name;
                        $value['status'] = true;
                        if ($value['required'])
                            $totalRequired[1]++;
                    }
                }

                if ($totalRequired[0] == $totalRequired[1])
                    $canSubmit = true;

                return view('applicant.requirement_list', compact('requirements', 'canSubmit', 'remarks'));
            }

            $validated = $request->validate([
                'id' => 'required',
                'file' => 'required|mimes:jpg,png,jpeg,pdf|max:2048'
            ]);

            if ($request->hasFile('file')) {
                $image = $validated['file'];
                $origName = $image->getClientOriginalName();
                $imageName = $image->hashName();
                Storage::disk('public')->put('applicant_requirements', $image);
                $valid['file'] = $imageName;

                RequirementSubmitted::create([
                    'user_id' => auth()->user()->id,
                    'requirement_id' => $validated['id'],
                    'file' => $valid['file'],
                    'file_name' => $origName
                ]);

                return  redirect()->back()->with('success', 'Requirements Uploaded');
            }
        } else
            return redirect()->route('steps');
    }

    public function RequirementEdit(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg,pdf|max:2048'
        ]);
        $reqSubmitted = RequirementSubmitted::where('requirement_id', $validated['id'])->where('user_id', auth()->user()->id)->first();

        if ($request->hasFile('file')) {

            unlink(public_path() . '/storage/applicant_requirements/' . $reqSubmitted->file);

            $image = $request->file;
            $origName = $image->getClientOriginalName();
            $imageName = $image->hashName();
            Storage::disk('public')->put('applicant_requirements', $image);
            $validated['file'] = $imageName;

            $reqSubmitted->update([
                'file' => $validated['file'],
                'file_name' => $origName
            ]);
            return  redirect()->back()->with('success', 'Successfully Edited');
        }
    }

    public function RequirementSubmit()
    {
        $user = User::find(auth()->user()->id);
        if ($user != null) {
            $user->status = Status::Review;
            $user->update();

            $inform = Information::select('first_name', 'middle_name', 'last_name')->where('user_id', $user->id)->first();

            $applicant_name = $inform->first_name . " " . $inform->middle_name . " " . $inform->last_name;

            Mail::to($user->email)->send(new FormDone(
                $applicant_name,
            ));

            return redirect()->route('loading');
        }
    }
}
