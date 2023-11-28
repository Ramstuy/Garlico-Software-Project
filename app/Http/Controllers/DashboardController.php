<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function overview()  {
    $users = User::where('is_admin', 0)->get();
    // $totalQuantityOrdered = $customers->flatMap->orders->sum('quantity_ordered');
    $totalOrders = Order::count();
    $successOrders = Shipment::where('status', 'delivered')->count();
    $totalUsers = User::where('is_admin', 0)->count();
    return view ('layouts.overview', compact('users', 'totalOrders', 'successOrders', 'totalUsers'));
    }
    function orders()  {
        $customers = Customer::with('orders')->get();
        return view ('layouts.orders', compact('customers'));
    }
    function shipment() {
    $customers = Customer::with('orders.shipments')->get();
    // dd($customers);
    return view('layouts.shipment', compact('customers'));
    }

    function client()  {
        
        $customers = Customer::all();
        return view('layouts.client', compact('customers'));
        
    }
}
