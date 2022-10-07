<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index($id)
    {
    	

    	return view('store.product');
    }

    public function show()
    {

    }
}
