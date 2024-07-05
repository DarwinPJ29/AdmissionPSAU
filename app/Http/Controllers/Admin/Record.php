<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Record extends Controller
{
    public function records(){
        return view('admin.records');
    }
    public function denied(){
        return view('admin.tabs.denied_list');
    }
}
