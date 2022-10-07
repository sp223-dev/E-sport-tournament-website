<?php

namespace App\Http\Controllers;

use App\Matchs;
use Illuminate\Http\Request;
use App\Coach;
use Illuminate\Support\Facades\DB;
use App\Myteam;
class MainMenuController extends Controller
{
    public function index()
    {

        $coaches = Coach::all();
        $teams = Myteam::all();
        $upcoming = DB::table('tbl_matchs')
                    ->join('tbl_myteams', 'tbl_matchs.team_id', '=' , 'tbl_myteams.id')
                    ->join('tbl_myteams2', 'tbl_matchs.team_id2', '=' , 'tbl_myteams2.id')
                    ->select('tbl_myteams.image as gambar1', 
                                'tbl_myteams.nama as nama1', 
                                'tbl_myteams2.image as gambar2',
                                'tbl_myteams2.nama as nama2'
                                ,'tbl_matchs.score1 as score1','tbl_matchs.score2 as score2')
                    ->where('status', '=', 'upcoming')
                    ->get();
        $past = DB::table('tbl_matchs')
        ->join('tbl_myteams', 'tbl_matchs.team_id', '=' , 'tbl_myteams.id')
        ->join('tbl_myteams2', 'tbl_matchs.team_id2', '=' , 'tbl_myteams2.id')
        ->select('tbl_myteams.image as gambar1', 
                    'tbl_myteams.nama as nama1', 
                    'tbl_myteams2.image as gambar2',
                    'tbl_myteams2.nama as nama2'
                    ,'tbl_matchs.score1 as score1','tbl_matchs.score2 as score2')
        ->where('status', '=', 'latest match')
        ->get();
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
        $matches = Matchs::with('myteam', 'myteam2')->get();
        return view('mainmenu',compact('coaches','teams','matches', 'upcoming', 'past', 'live'));
    }
    
    public function show($id)
    {
        $coaches = Coach::with('myteam')->find($id);
        
        $teams = Coach::where('team_id',$id)->get();
        // dump(env('APP_URL')); die();
        return view('team.coach-detail', compact('coaches', 'teams'));
    }

    


}
