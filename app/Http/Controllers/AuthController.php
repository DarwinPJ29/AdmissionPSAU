<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function storeAccnt(Request $request)
    {
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

    public function AccountActivation($id)
    {
        $user = User::find($id);
        if ($user->activated) {
            return redirect()->route('login')->with('activated', "Account is already activated");
        }

        $user->activated = 1;
        $user->update();
        return redirect()->route('login')->with('success', "You can now Login");
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.login');
        }

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $validated['email'])->get()->first();

        // User account is not activated
        if ($user) {
            if ($user->activated) {
                // Check email and password is valid
                if (Auth::attempt($validated)) {
                    $request->session()->regenerate();

                    if ($user->is_default_pass) {
                        return redirect()->route('changeDefaultPassword');
                    }

                    return redirect()->route('loading');
                } else {
                    return redirect()->back()->with('failed', 'Email or Password is invalid!');
                }
            } else {
                return redirect()->back()->with('failed', 'Sorry your account is not activated please check your email!');
            }
        } else {
            return redirect()->back()->with('failed', 'Email or Password is invalid!');
        }
    }

    public function changePassword(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.admin_setting');
        }

        $valid = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:4|max:20',
            'confirm_password' => 'required|same:password_new|min:4|max:20',
        ]);

        $user = User::find(auth()->user()->id);
        if (Hash::check($valid['password_old'], $user->password)) {
            $user->password = Hash::make($valid['password_confirm']);
            $user->update();
            return redirect()->route('loading');
        } else {
            return back()->with('failed', 'Password is incorrect');
        }
    }

    public function changeDefaultPassword(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.admin_setting');
        }

        $valid = $request->validate([
            'new_password' => 'required|min:4|max:20',
            'confirm_password' => 'required|same:password_new|min:4|max:20',
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($valid['password_confirm']);
        $user->is_default_pass = 1;
        $user->update();

        return redirect()->route('loading');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'You are now logged out!');
    }
}
