<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Evaluation extends Controller
{
    public function evaluation(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.evaluation');
        }
    }
}
