<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsUserController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.news', compact('news')); 
    }

}
