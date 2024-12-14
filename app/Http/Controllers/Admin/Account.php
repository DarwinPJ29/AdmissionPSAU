<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\User;
use App\Services\Core;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Account extends Controller
{
    public function Account(Request $request)
    {
        if ($request->isMethod('get')) {

            $users = User::select('users.id', 'users.email', 'users.activated', 'information.prefix', 'information.first_name', 'information.middle_name', 'information.last_name', 'information.suffix')
                ->where('users.id', '!=', auth()->user()->id)  // Corrected the access to the user ID
                ->where('users.role', '1')
                ->join('information', 'information.user_id', '=', 'users.id')  // Join the Information table
                ->orderBy('information.last_name', 'asc')  // Order by last_name in the Information table
                ->get();
            return view('admin.account', compact('users'));
        }

        $rules = [
            'prefix' => 'nullable|string|max:10',
            'first' => 'required|string|max:50',
            'middle' => 'nullable|string|max:50',
            'last' => 'required|string|max:50',
            'suffix' => 'nullable|string|max:10',
            'email' => 'required|email|unique:users,email|max:100',
        ];

        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return back()
                ->with('reOpenModal', 'addAccountBtn')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('first') . '.' . $request->input('last')),
            'activated' => true,
            'role' => 1
        ];

        $user = Core::Save('User', $data, 0);

        $data = [
            'user_id' => $user,
            'prefix' => $request->input('prefix'),
            'first_name' => $request->input('first'),
            'middle_name' => $request->input('middle'),
            'last_name' => $request->input('last'),
            'suffix' => $request->input('suffix'),
        ];

        Core::Save('Information', $data, 0);

        return redirect()->back()->with('success', "Account has been successfully created.");
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'prefix' => 'nullable|string|max:10',
            'first' => 'required|string|max:50',
            'middle' => 'nullable|string|max:50',
            'last' => 'required|string|max:50',
            'suffix' => 'nullable|string|max:10',
            'email' => [
                'required',
                'email',
                'max:100',
                Rule::unique('users')->ignore($id),  // Exclude the user with the provided $id
            ],
        ];

        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return back()
                ->with('reOpenModal', 'editAccountBtn' . $id)
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find($id);

        $user->email = $request->input('email');
        $user->save();

        $info = Information::where('user_id', $id)->first();

        $info->prefix = $request->input('prefix');
        $info->first_name = $request->input('first');
        $info->middle_name = $request->input('middle');
        $info->last_name = $request->input('last');
        $info->suffix = $request->input('suffix');

        $info->save();

        return redirect()->back()->with('success', "Account has been successfully updated.");
    }

    public function activate($id)
    {
        $user = User::find($id);

        $user->activated = $user->activated ? false : true;
        $user->save();

        return redirect()->back();
    }
}
