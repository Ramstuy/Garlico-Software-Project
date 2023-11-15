<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function overview()  {
        $customers = Customer::all();
        // dd($customers);
        return view ('overview', compact('customers'));
    }
    function orders()  {
        return view ('orders');
    }
    function shipment()  {
        $customers = Customer::with('orders')->get();
        return view ('shipment', compact('customers'));
    }
    function client()  {
        return view ('client');
    }
}
