<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Matchs;
use App\Myteam;
use App\Myteam2;
use Illuminate\Support\Facades\DB;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Matchs::with('myteam', 'myteam2')->get();
   
        

        return view('backend.match.index_match', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $teams = Myteam ::all();
        $teams2 = Myteam2 ::all();
        return view('backend.match.create_match', compact('teams', 'teams2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/arena/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }
   
       $matches = new Matchs();
       $matches ->team_id2 =  $request->team_id2;
       $matches ->score1 = $request->score1;
       $matches ->team_id =  $request->team_id;
       $matches ->score2 = $request->score2;
       $matches ->status = $request->status;
       $matches ->tanggal = $request->tanggal;
       $matches ->waktu = $request->waktu;
       $matches ->arena = $request->arena;
       $matches->image = $fileName;
       $matches ->weather = $request->weather;
       $matches ->detail = $request->detail;
       $matches -> save();

       return redirect()->route('match-home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matches = Matchs::with('myteam')->find($id);
        $teams = Myteam::all();
        $teams2 = Myteam::all();
        return view('backend.match.edit_match', compact('matches', 'teams',  'teams2'));
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

            'score1' ,
            'score2' ,
            'status' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'team_id' => 'required',         
            'team_id2' => 'required',         

           
        ]);
         
        $update = [
            
            'score1' => $request->score1, 
            'score2' => $request->score2, 
            'status' => $request->status, 
            'tanggal' => $request->tanggal, 
            'waktu' => $request->waktu,
            'team_id'=>$request->team_id,
            'team_id2'=>$request->team_id2,
           
        ];
 
        // if ($files = $request->file('image')) {
        //    $destinationPath = 'image/player/'; // upload path
        //    $profileImage = time() . "." . $files->getClientOriginalExtension();
        //    $files->move($destinationPath, $profileImage);
        //    $update['image'] = $profileImage;
        // }
         
        $update['score1'] = $request->get('score1');
        $update['score2'] = $request->get('score2');
        $update['status'] = $request->get('status');
        $update['tanggal'] = $request->get('tanggal');
        $update['waktu'] = $request->get('waktu');
        $update['team_id'] = $request->get('team_id');
        $update['team_id2'] = $request->get('team_id2');
  
        Matchs::where('id',$id)->update($update);
 
        return redirect()->route('match-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matches = Matchs::find($id);
        $matches->delete();

        return redirect()->route('match-home');
    }



}
