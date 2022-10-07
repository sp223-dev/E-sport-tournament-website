<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Players;
>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
use Illuminate\Http\Request;

class TeamDetailController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $players = Players::with('team');
=======
        // $players = Players::with('team');
>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
        return view('team.team-participants', compact('players'));
    }


}
