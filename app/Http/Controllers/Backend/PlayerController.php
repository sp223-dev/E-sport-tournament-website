<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myteam;
use App\Players;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $players = Players::with('myteam');
        // dump($players);
        return view('backend.Player.index_player', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Myteam::all();
        return view('backend.player.create_player', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
        $file = $request->file('image');
        $filename = time().'_'.$file->getClientOriginalName();

        // File extension
        // $extension = $file->getClientOriginalExtension();

        // File upload location
        $location = 'image/player/';

        // Upload file
        $file->move($location, $filename);
        
        // File path
        $filepath = url('image/player'.$filename);

        $teams = new Players();
        $teams->nama = $request->nama;
        $teams->id_team =  $request->id_teams;
        $teams->kebangsaan = $request->kebangsaan;
        $teams->posisi = $request->posisi;
        $teams->umur = $request->umur;
        $teams->seasons = $request->seasons;
        $teams->about = $request->about;
        $teams->points = $request->points;
        $teams->games = $request->games;
        $teams->image = $filename;
        $teams-> save();

        return redirect()->route('player-home')->with('success', 'data berhasil di tambahkan ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       

        $players = Players::find($id);
      
        // dump(env('APP_URL')); die();
        return view('team.team-detail', compact('players'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Myteam::all();
        $players = Players::with('myteam')->find($id) ;
        return view('backend.player.edit_player', compact('players', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image'=> 'required',
            'nama' => 'required',
            'kebangsaan' => 'required',
            'posisi' => 'required',
            'umur' => 'required',
            'seasons' => 'required',
            'games' => 'required',         
            'points' => 'required',
            'about' => 'required',
            'team_id'=>'required',
           
        ]);
         
        $update = [
            'image' => $request->image,
            'nama' => $request->nama, 
            'kebangsaan' => $request->kebangsaan, 
            'posisi' => $request->kebangsaan, 
            'umur' => $request->kebangsaan, 
            'seasons' => $request->seasons,
            'games' => $request->games,
            'points' => $request->points,
            'about' => $request->about, 
            'team_id'=>$request->id_team,
           
        ];
 
        if ($files = $request->file('image')) {
           $destinationPath = 'image/player/'; // upload path
           $profileImage = time() . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $update['image'] = $profileImage;
        }
         
        $update['nama'] = $request->get('nama');
        $update['team_id'] = $request->get('team_id');
        $update['kebangsaan'] = $request->get('kebangsaan');
        $update['posisi'] = $request->get('posisi');
        $update['umur'] = $request->get('umur');
        $update['about'] = $request->get('about');
        $update['seasons'] = $request->get('seasons');
        $update['points'] = $request->get('points');
        $update['games'] = $request->get('games');
    
        Players::where('id',$id)->update($update);
 
        return redirect()->route('player-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $players = Players::find($id);
        $players->delete();
        return redirect()->route('player-home');
    }
}
