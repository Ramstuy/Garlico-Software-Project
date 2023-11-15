<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   
    function adminRegister()  {
        return view ('adminsignup');
    }
    function userRegister()  {
        return view ('usersignup');
    }
}
