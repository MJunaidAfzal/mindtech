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
            return redirect()->route('form')->with([
                'success' => 'Login Successfully!',
            ]);
        }
    }

    return back()->withErrors(['email' => 'Email not found.']);
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
