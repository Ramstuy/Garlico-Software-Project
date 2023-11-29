<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function adminLogin()  {
        return view ('adminlogin');
    }

    function adminAuth(Request $request) {
        $credentials = $request->validate([
            'email'=> 'required|email:dns',
            'password'=> 'required|min:6|max:255'
            
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashoverview');
        }

        return back()->with('loginError', 'Incorrect username or password.');
    }

    function adminLogout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/adminlogin');
    }
    function userLogin()  {
        return view ('loginform');
    }
}
