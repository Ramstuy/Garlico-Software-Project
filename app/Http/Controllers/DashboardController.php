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
    
    // Calculate the total quantity ordered across all customers
    $totalQuantityOrdered = $customers->flatMap->orders->sum('quantity_ordered');

    return view('overview', compact('customers', 'totalQuantityOrdered'));
    }
    function orders()  {
        $customers = Customer::all();
        return view ('orders', compact('customers'));
    }
    function shipment()
    {
        $customers = Customer::with('orders')->get();
        return view('shipment', compact('customers'));
    }
    function client()  {
        $customers = Customer::all();
        return view ('client', compact('customers'));
    }
}
