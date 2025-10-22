<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function showForm()
    {
        return view('login'); // it went for login form 
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'], // yaha hum email aur pass ke fields dengy login for mein 
            'password' => ['required'],
        ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect('/dashboard')->with('success', 'Welcome back!');
    //     }

    //     // return back()->with('error', 'Invalid credentials.'); // ager invalid hue tou it will show this msg
    //       return redirect()->route('home');
    // }
if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('layout.app')->with('success', 'Logged out successfully.');
    }
    
}