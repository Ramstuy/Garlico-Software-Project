<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   
    function adminRegister()  {
        return view ('adminsignup');
    }
    function adminStore(Request $request) {
        // return $request->all();
        $validatedData = $request->validate([
            'username'=> ['required','min:4','max:16', 'unique:users', 'alpha_dash:ascii'],
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:6|max:255'
        ]);
        // dd('registrasi berhasil!');
        $validatedData['password'] = Hash::make($validatedData['password']);

        $validatedData['is_admin'] = 1;
        // dd($validatedData);

        User::create($validatedData);
        $request->session()->flash('success','Registration successfull! Please login');
        return redirect('/adminlogin');

    }
    function userRegister()  {
        return view ('usersignup');
    }
}
