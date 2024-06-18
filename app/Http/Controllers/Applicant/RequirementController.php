<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Requirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RequirementController extends Controller
{
    public function Requirement(Request $request, $id)
    {
        if ($request->isMethod('get')) {

            return view('applicant.requirement_list');
        }

        // $valid = $request->validated();

        // if ($request->hasFile('file')) {
        //     $image = $valid['file'];
        //     $imageName = $image->hashName();
        //     Storage::disk('public')->put('products', $image);
        //     $valid['file'] = $imageName;
        //     return  redirect()->back()->with('success', 'Requirement for');
        // }
    }
}
