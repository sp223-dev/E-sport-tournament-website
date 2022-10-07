<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
=======
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Comment;
   
class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
>>>>>>> f4647f19e9a7d3dc162cbf7abce47467b3d7f5a1
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);
   
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
    
        Comment::create($input);
   
        return back();
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> f4647f19e9a7d3dc162cbf7abce47467b3d7f5a1
