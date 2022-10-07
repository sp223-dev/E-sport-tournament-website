<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = DB::table('posts')->where('name','like','%'.$search.'%')->paginate(5);
        return ['posts' => $posts];
    }
}
