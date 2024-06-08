<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function storeAccnt(Request $request){
        $request->validate([
            'roles' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'bday' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Uncomment and adjust the following lines if image upload is needed
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

       User::create([
        'roles' => $request->roles,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'last_name' => $request->last_name,
        'birthday' => $request->bday,
        'age' => $request->age,
        'gender' => $request->gender,
        'address' => $request->address,
        'contact' => $request->contact,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);


        return redirect()->route('index')->with('success', 'Account created successfully.');
    }

    public function registration(){
        return view('auth.register');
    }
}
