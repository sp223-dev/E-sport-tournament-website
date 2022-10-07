<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myteam;
use App\Players;

class PlayerController extends Controller
{
    public function index(){

        $players = Players::all();
        return view('bigetron.player-user' ,compact('players'));

        $teams = Myteam::all();
        return view('team.team-participants', compact('teams','teams')); 
    }
    
    public function show($id)
    {
        $players = Players::find($id);
        // dump(env('APP_URL')); die();
        return view('team.player-participants', compact('players'));
    }
}
