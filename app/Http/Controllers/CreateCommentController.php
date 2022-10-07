<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateComment;

class CreateCommentController extends Controller
{
    public function index()
    {
        $comments = CreateComment::all();
        return view('news.comment', compact('comments') );
    }
  
    public function thanks()
    {
        return view('thanks');
    }

    public function create()
    {
        //
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);
  
        CreateComment::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Terimakasih telah menghubungi kami. Tim kami akan segera menghubungi anda.']);
    }
}
    