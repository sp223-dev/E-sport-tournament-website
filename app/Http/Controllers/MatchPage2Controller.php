<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matchs;
use App\Players;

use Illuminate\Support\Facades\DB;
class MatchPage2Controller extends Controller
{
    public function index()
    {
        $players = Players::all();
        $live = DB::table('tbl_matchs')
        ->join('tbl_myteams', 'tbl_matchs.team_id', '=' , 'tbl_myteams.id')
        ->join('tbl_myteams2', 'tbl_matchs.team_id2', '=' , 'tbl_myteams2.id')
        ->select('tbl_myteams.image as gambar1', 
                'tbl_myteams.nama as nama1', 
                'tbl_myteams2.image as gambar2',
                'tbl_myteams2.nama as nama2'
                ,'tbl_matchs.score1 as score1','tbl_matchs.score2 as score2')
        ->where('status', '=', 'match live')
        ->get();
        $matches = Matchs::all();
        return view('home.matchpage2',compact('matches','players', 'live'));
    }
}
