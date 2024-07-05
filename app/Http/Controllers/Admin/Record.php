<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class Record extends Controller
{
    public function records()
    {
        $users = User::select('id', 'email', 'applicant_no')->where('evaluation', true)
            ->OrderBy('created_at', 'asc')->get();
        foreach ($users as $value) {
            $info = Information::where('user_id', $value['id'])->first();
            $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
            $result = Result::where('user_id', auth()->user()->id)->first();
            $value['show'] = $result->evaluation;
        }
        $filteredUsers = $users->filter(function ($user) {
            return $user['show'] == 1;
        });
        $filteredUsers = $filteredUsers->values();
        $users = $filteredUsers;
        return view('admin.records', compact('users'));
    }
    public function denied()
    {
        $users = User::select('id', 'email', 'applicant_no')->where('evaluation', true)
            ->OrderBy('created_at', 'asc')->get();
        foreach ($users as $value) {
            $info = Information::where('user_id', $value['id'])->first();
            $value['name'] = $info->first_name . ' ' . $info->middle_name . ' ' . $info->last_name;
            $result = Result::where('user_id', auth()->user()->id)->first();
            $value['show'] = $result->evaluation;
        }
        $filteredUsers = $users->filter(function ($user) {
            return $user['show'] == 0;
        });
        $filteredUsers = $filteredUsers->values();
        $users = $filteredUsers;

        return view('admin.tabs.denied_list', compact('users'));
    }
}
