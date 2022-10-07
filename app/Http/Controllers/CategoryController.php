<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class CategoryController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('category.lifestyle', ['category' => $category, 'products' => $products]);
    }
   
}
