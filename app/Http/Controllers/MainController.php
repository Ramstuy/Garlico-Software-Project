<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function signup()  {
        return view ('usersignup');
        
    }
    function index()  {
        return view ('home');
        
    }
    function register()  {
        return view ('registerform');
        
    }
    function login()  {
        return view ('loginform');
        
    }
    function ship()  {
        return view ('shipment');
        
    }
    
}

