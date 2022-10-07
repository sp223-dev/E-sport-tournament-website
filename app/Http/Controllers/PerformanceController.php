<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class PerformanceController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('category.performance', ['category' => $category, 'products' => $products]);
    }
   
}
