<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerUserController extends Controller
{
    public function index()
    {

        return view('bigetron.player');
    }
}
