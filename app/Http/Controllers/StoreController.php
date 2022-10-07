<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\User;
use App\Preview;
use App\OrderDetail;
use Auth;
use Carbon\Carbon;
<<<<<<< HEAD
=======


>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
class StoreController extends Controller
{
    
    public function index()
    {
        $products = Product::paginate(6);

    	return view('store.store' , compact('products'));
    }

    public function product($id)
    {
        $product = Product::all();
        $product = Product::where('id', $id)->first();
        return view('store/product', compact('product'));
    }

    public function order(Request $request, $id)
    {	
    	$product = Product::where('id', $id)->first();
    	$tanggal = Carbon::now();

    	//validasi apakah melebihi stok
    	if($request->jumlah_order > $product->stok)
    	{
    		return redirect('store/product'.$id);
    	}

    	//cek validasi
    	$cek_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database order
    	if(empty($cek_order))
    	{
    		$order = new Order;
	    	$order->user_id = Auth::user()->id;
	    	$order->tanggal = $tanggal;
	    	$order->status = 0;
	    	$order->jumlah_harga = 0;
            $order->kode = mt_rand(100, 999);
	    	$order->save();
    	}
    	

    	//simpan ke database order detail
    	$order_baru = Order::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek order detail
    	$cek_order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $order_baru->id)->first();
    	if(empty($cek_order_detail))
    	{
    		$order_detail = new OrderDetail;
	    	$order_detail->product_id = $product->id;
	    	$order_detail->order_id = $order_baru->id;
	    	$order_detail->jumlah = $request->jumlah_order;
	    	$order_detail->jumlah_harga = $product->harga*$request->jumlah_order;
	    	$order_detail->save();
    	}else 
    	{
    		$order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $order_baru->id)->first();

    		$order_detail->jumlah = $order_detail->jumlah+$request->jumlah_order;

    		//harga sekarang
    		$harga_order_detail_baru = $product->harga*$request->jumlah_order;
	    	$order_detail->jumlah_harga = $order_detail->jumlah_harga+$harga_order_detail_baru;
	    	$order_detail->update();
    	}

    	//jumlah total
    	$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$order->jumlah_harga = $order->jumlah_harga+$product->harga*$request->jumlah_order;
    	$order->update();
    	
        
    	return redirect('cart');
    }

	public function konfirmasi()
	{
		$user = User::where('id', Auth::user()->id)->first();

        if(empty($user->born))
        {
            
            return redirect('profile');
        }

        if(empty($user->phone))
        {
            
            return redirect('profile');
        }

		$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

		$order_details = OrderDetail::where('order_id', $order_id)->get();
        foreach ($order_details as $order_detail) {
            $product = Product::where('id', $order_detail->product_id)->first();
            $product->stok = $product->stok-$order_detail->jumlah;
            $product->update();
        }

		return redirect('store');
	}
	public function find(Request $request)
	{
		
		$find = $request->input('find');
		$products = Product::where('nama','like', "%$find%")->get();
		return view('search.index')->with('products',$products);

	}

	// public function preview(Request $request)
	// {
	// 	$request->request->add(['user_id' => auth()->user()->id]);
	// 	$preview = Preview::create($request->all());

	// 	return redirect()->back();
	// }

}
