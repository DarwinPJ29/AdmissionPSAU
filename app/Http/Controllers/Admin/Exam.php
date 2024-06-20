<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Exam extends Controller
{
    public function exam(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.exam');
        }
    }
}
