<?php

namespace App\Http\Controllers;

use App\Matchs;
use Illuminate\Http\Request;
use App\Tournament;
use App\Myteam;

use Illuminate\Support\Facades\DB;


class MatchesController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        $matches = Matchs::with('myteam', 'myteam2')->get();

       
        return view('matches.matches' ,compact('tournaments', 'matches'));

    }

    
}
