<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()  {
        return view ('login.index');
    }

    function authenticate(Request $request) {
        $credentials = $request->validate([
            'username'=> ['required','min:4','max:8', 'alpha_dash:ascii'],
            'password'=> 'required|min:6|max:255'
            
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Incorrect username or password.');
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
