<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    function index()  {
        return view ('home');
    }
    function customerOrder()  {
        return view ('orderForm');
    }
    function store(Request $request) {
        $validatedData = $request->validate([
            'name'=> 'required|min:3|max:28|regex:/^[a-zA-Z\s]+$/',
            'phone_number'=> 'required|min:10|numeric',
            'email'=> 'required|email:dns|unique:users',
            'address'=> 'required|min:5|max:255',
            'quantity'=> 'required|min:1|numeric'
        ]);
        dd('success');
    }
}

