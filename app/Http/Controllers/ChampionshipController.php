<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    public function index()
    {
        $news = News::all();
        $category = Category::all();
        return view('category.championship', ['category' => $category, 'news' => $news]);
    }
}
