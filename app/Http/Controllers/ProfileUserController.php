<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class ProfileUserController extends Controller
{
    public function index()
    {
		
        $user = User::where('id', Auth::user()->id)->first();

    	return view('profile.profile', compact('user'));
    }
   
}
