<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerProfileController extends Controller
{
    public function index()
    {

        return view('bigetron.player-user');
    }
}
