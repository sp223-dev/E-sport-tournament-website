<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tournament;

class TournamentController extends Controller
{
    public function index()
    {
    	$tournaments = Tournament::all();

    	return view('backend.tournament.index', compact('tournaments'));
    }

    public function create()
    {
    	return view('backend.tournament.create');
    }

    public function store(Request $request)
    {
        if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/tournament/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }

        $tournament = new Tournament();
        $tournament->title = $request->title;
        $tournament->image = $fileName;
        $tournament->prizepool = $request->prizepool;
        $tournament->seats = $request->seats;
        $tournament->date = $request->date;
        $tournament->place = $request->place;
        $tournament->save();

        return redirect(route('tournament-table'));
    }

    public function edit($id)
    {
        $tournament = Tournament::find($id);
        return view('backend.tournament.edit', ['tournament' => $tournament]);
    }

    public function update(Request $request, $id)
    {
        

        $tournament = Tournament::find($id);

        if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/tournament/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }

        $tournament = new Tournament();
        $tournament->title = $request->title;
        $tournament->image = $fileName;
        $tournament->prizepool = $request->prizepool;
        $tournament->seats = $request->seats;
        $tournament->date = $request->date;
        $tournament->place = $request->place;
        $tournament->save();

        return redirect(route('tournament-table'));
    }

    public function destroy($id)
    {
        $tournament = Tournament::find($id)->delete();
        return redirect()->back();
    }
}
