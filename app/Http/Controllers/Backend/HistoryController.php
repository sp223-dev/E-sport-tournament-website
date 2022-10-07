<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('backend.order.index', compact('orders'));
    }
}
