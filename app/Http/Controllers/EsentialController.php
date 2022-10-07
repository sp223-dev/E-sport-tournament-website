<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class EsentialController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('category.esential', ['category' => $category, 'products' => $products]);
    }
   
}
