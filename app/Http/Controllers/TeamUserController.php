<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myteam;
class TeamUserController extends Controller
{
    public function index()
    {
        $teams = Myteam::all();
        return view('team.team-participants', compact('teams')); 
    }
    public function show($id)
    {
        $teams = Myteam::find($id);
        return view('team.team-detail', compact('teams') );
    }
     
}
