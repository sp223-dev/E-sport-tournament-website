<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Coach;
class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();
        return view('mainmenu', compact('coaches'));
    }

    public function show($id)
    {
        $players = Players::with('myteam')->find($id);
        
        $teams = Coach::where('team_id',$id)->get();

        // $teams = DB::table('tbl_player_teams')
        //     ->join('tbl_myteams', 'tbl_player_teams.id_team', '=', 'tbl_myteams.id')
        //     ->join('tbl_players', 'tbl_player_teams.id_player', '=', 'tbl_players.id')
        //     ->select('tbl_myteams.nama as nama_team', 'tbl_players.nama as nama_player')
        //     ->get();

        

        // dump(env('APP_URL')); die();
        return view('team.player-participants', compact('players', 'teams'));
    }
}
