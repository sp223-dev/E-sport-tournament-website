<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class LimitedController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('category.limited', ['category' => $category, 'products' => $products]);
    }
   
}
