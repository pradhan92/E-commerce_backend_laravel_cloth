<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Bill::orderBy('created_at','desc')->get();
        return view('backend.order.index',compact('orders'));
    }
    public function show(string $id)
    {
        $order = Bill::find($id);
        $order = $order->with('bill_descriptions')->first();
        return view('backend.order.show',compact('order'));
    }

}
