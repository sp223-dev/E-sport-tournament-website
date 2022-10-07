<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Category;
class StoreController extends Controller
{
    public function index()
    {
    	$products = Product::all();

    	return view('backend.product.index', compact('products'));
    }
      public function create()
    {
        $kategori = Category::all();

    	return view('backend.product.create', ['kategori' => $kategori]);
    }
    public function store(Request $request)
    {
        if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/store/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }

        $product = new Product();
        $product->image = $fileName;
        $product->category_id = $request->category_id;
        $product->nama = $request->nama;
        $product->stok = $request->stok;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect(route('product-table'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        

        $product = Product::find($id);

        if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/store/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }

        $product->image = $fileName;
        $product->category_id = $request->category_id;
        $product->nama = $request->nama;
        $product->stok = $request->stok;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect(route('product-table'));
    }

    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->back();
    }
}
