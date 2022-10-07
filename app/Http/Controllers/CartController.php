<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    public function index()
    {
        
        $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
        $order_details = [];
           if(!empty($order))
           {
               $order_details = OrderDetail::where('order_id', $order->id)->get();
   
           }
           
           return view('store.cart', compact('order', 'order_details'));
    }

    public function delete($id)
   {
    
    $order_detail = OrderDetail::where('id', $id)->first();

    $order = Order::where('id', $order_detail->order_id)->first();
    $order->jumlah_harga = $order->jumlah_harga-$order_detail->jumlah_harga;
    $order->update();


    $order_detail->delete();
    
    // $order->jumlah_harga = $order->jumlah_harga-$order_detail->jumlah_harga;
    // $order->update();



    
    return redirect()->back();
   }
}
