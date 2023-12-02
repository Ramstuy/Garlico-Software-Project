<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function overview()  {
    $users = User::where('is_admin', 0)->get();
    // $totalQuantityOrdered = $customers->flatMap->orders->sum('quantity_ordered');
    $totalOrders = Order::count();
    $successOrders = DB::table('shipments')
    ->join('orders', 'orders.id', '=', 'shipments.order_id')
    ->where('orders.is_paid', true)
    ->where('shipments.status', "delivered")
    ->count();
    $totalUsers = User::where('is_admin', 0)->count();
    return view ('layouts.overview', compact('users', 'totalOrders', 'successOrders', 'totalUsers'));
    }
    function orders()  {
        $customers = Customer::with('orders')->get();
        return view ('layouts.orders', compact('customers'));
    }

    function paidStatus($id) {
        $order = Order::find($id);

        if($order->is_paid == true) {
            $order->is_paid = false;
        } else
        {
            $order->is_paid = true;
        }
        $order->save();
        return redirect()->back()->with('success', 'Paid status updated!');
    }
    function shipment() {
    $customers = Customer::with('orders.shipments')->get();
    // dd($customers);
    return view('layouts.shipment', compact('customers'));
    }

    function shipStatus($id) {
        $shipment = Shipment::find($id);

        if($shipment->getRawOriginal('status') == "pending") {
            $shipment->status = "shipped";
        } elseif($shipment->getRawOriginal('status') == "shipped") {
            $shipment->status = "delivered";
        }
        $shipment->save();
        return redirect()->back()->with('success', 'Shipment status updated!');
    }
    function client()  {
        
        $customers = Customer::all();
        return view('layouts.client', compact('customers'));
        
    }
}
