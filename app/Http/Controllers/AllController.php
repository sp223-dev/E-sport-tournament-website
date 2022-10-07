<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class AllController extends Controller
{
    public function index()
    {    
        $news = News::paginate(2);
        return view('news.all', compact('news')); 
    }
    // public function show($id)
    // {    
    //     $news = News::find($id);
    //     return view('news.coba', compact('news')); 
    // }


    
    public function show($id)
    {
        $news = News::find($id);
        // dump(env('APP_URL')); die();
        return view('news.news', compact('news'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search-news');
        $news = News::where('judul', 'LIKE','%'.$search.'%')->paginate(2);
        return view('news.all', ['news' => $news]);
    }

    public function findnews(Request $request)
	{
		
		$findnews = $request->input('findnews');
		$news = News::where('judul','like', "%$findnews%")->get();
		return view('search.news')->with('news',$news);

	}

    
}
