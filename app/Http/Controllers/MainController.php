<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Garlico;
use App\Models\Customer;
use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    function index()  {
        $garlico = Garlico::orderBy('created_at', 'desc')->first();
        return view ('home', compact('garlico'));
    }

    function customerOrder($user_id)  {
        $customer = Customer::where('user_id', $user_id)->orderBy('created_at', 'desc')->first();
        if (!isset($customer)) {
            return view ('orderForm');
        }
        $order = Order::where('customer_id', $customer->id)->orderBy('created_at', 'desc')->with('shipments')->first();
        if ($order->is_cancelled!=false || $order -> shipments[0] -> getRawOriginal('status') ==  'delivered') {
            return view ('orderForm');
        }
        $garlico = Garlico::orderBy('created_at', 'desc')->first();
        $price = $garlico->price*$order->quantity_ordered;
        $status = '';
        if($order->is_paid==true) {
            $status = 'Sudah Dibayar';
            if ($order -> shipments[0] -> getRawOriginal('status') ==  'pending') {
                $status = 'Pesanan sedang diproses';
            } else if ($order -> shipments[0] -> getRawOriginal('status') ==  'shipped') {
                $status = 'Pesanan dalam perjalanan';
            } else if ($order -> shipments[0] -> getRawOriginal('status') ==  'delivered') {
                $status = 'Pesanan telah tiba';
            }
        } elseif ($order->is_paid==false) {
            $status = 'Belum Dibayar';
        } elseif ($order->is_cancelled==true) {
            $status = 'Pesanan Dibatalkan';
        }

        $test = ['customer' => $customer, 'order' => $order, 'price' => $price, 'status' => $status];
        // dd($test);
        return view ('orderSum', compact('test'));
    }

    function orderSummary()  {
        return view ('orderSum');
    }
    function store(Request $request) {
        $validatedData = $request->validate([
            'name'=> 'required|min:3|max:28|regex:/^[a-zA-Z\s]+$/',
            'phone_number'=> 'required|min:10|numeric',
            'email'=> 'required|email:dns',
            'address'=> 'required|min:5|max:255',
            'quantity'=> 'required|min:1|numeric'
        ]);
        $garlico = Garlico::orderBy('created_at', 'desc')->first();

        $customer = new Customer;
        $customer->user_id = Auth::user()->id;
        $customer->customer_name = $request->name;
        $customer->phone_number = $request->phone_number;
        $customer->customer_email = $request->email;
        $customer->customer_address = $request->address;
        $customer->save();

        $order = new Order;
        $order->customer_id = $customer->id;
        $order->garlico_id = $garlico->id;
        $order->quantity_ordered = $request->quantity;
        $order->save();

        $shipment = new Shipment;
        $shipment->order_id = $order->id;
        $shipment->save();

        $status = '';
        if($order->is_paid==true) {
            $status = 'Sudah Dibayar';
            if ($order -> shipments[0] -> getRawOriginal('status') ==  'pending') {
                $status = 'Pesanan sedang diproses';
            } else if ($order -> shipments[0] -> getRawOriginal('status') ==  'shipped') {
                $status = 'Pesanan dalam perjalanan';
            } else if ($order -> shipments[0] -> getRawOriginal('status') ==  'delivered') {
                $status = 'Pesanan telah tiba';
            }
        } elseif ($order->is_paid==false) {
            $status = 'Belum Dibayar';
        } elseif ($order->is_cancelled==true) {
            $status = 'Pesanan Dibatalkan';
        }

        $price = $garlico->price*$request->quantity;
        $test = ['customer' => $customer, 'order' => $order, 'price' => $price, 'status' => $status];

        // return redirect()->route('ordersummary')->with(['test' => $test]);
        return Redirect::route('custorder', ['id' => Auth::user()->id]);
    }

    function delete($id) {
        $order = Customer::find($id);
        $order->delete();
        return redirect()->route('home');
    }
}

