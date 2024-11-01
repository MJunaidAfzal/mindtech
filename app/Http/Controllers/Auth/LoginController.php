<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user) {
        Auth::login($user);

        if (empty($user->phone)) {
            return redirect()->route('form')->with([
                'success' => 'Login Successfully!',
                'info' => 'Please Edit your Profile First!',
            ]);
        } else {
            return redirect()->route('dashboard')->with([
                'success' => 'Login Successfully!',
            ]);
        }
    }

    return back()->withErrors(['email' => 'Email not found.']);
}

public function register()
{
    return view('auth.register');
}

public function customRegister(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    Auth::login($user);

    if (empty($user->phone)) {
        return redirect()->route('form')->with([
            'success' => 'Registration Successful! You are now logged in.',
            'info' => 'Please Edit your Profile First!',
        ]);
    } else {
        return redirect()->route('dashboard')->with([
            'success' => 'Registration Successful! You are now logged in.',
        ]);
    }

}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
