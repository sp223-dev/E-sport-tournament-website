<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function index()
    {
        $match = Match::all();
        return view('coba');
    }

    public function admin()
    {
        $match = Match::all();
        return view('backend.coba.index',compact('match'));
    }

    public function create()
    {

    	return view('backend.coba.create');
    }

    public function store(Request $request)
    {
        if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/coba/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }

        $match = new Match();
        $match->image = $fileName;
        $match->nama = $request->nama;
        $match->save();

        return redirect(route('match-admin'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', ['product' => $product]);
    }

}
