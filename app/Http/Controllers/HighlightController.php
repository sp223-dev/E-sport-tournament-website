<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $news = News::all();
        $category = Category::all();
        return view('category.highlight', ['category' => $category, 'news' => $news]);
    }
}
