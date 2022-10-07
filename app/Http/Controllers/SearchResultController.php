<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchResult;
use Illuminate\Support\Str;
class SearchResultController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $datas = 
            SearchResult::where('judul', 'LIKE','%'.$request->search.'%')->get();
    
        }
        else {
            $datas = SearchResult::all();
        }

       
        return view('searchresult', ['datas'=>$datas]);



    }

}
