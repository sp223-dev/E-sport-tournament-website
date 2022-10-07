<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myteam;
use App\Players;
class TeamController extends Controller
{
    public function index() {
        $teams = Myteam::all();
        return view('team.team-participants', compact('teams')); 
    }
 
    public function show($id)
    {

     $teams = Myteam::findOrFail($id);
     $players = Players::where('team_id',$id)->get();
     return view('team.team-detail', compact('teams', 'players') );
    }
}

