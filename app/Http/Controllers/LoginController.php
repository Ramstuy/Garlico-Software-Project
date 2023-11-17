<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function adminLogin()  {
        return view ('adminlogin');
    }
    function userLogin()  {
        return view ('loginform');
    }
}
