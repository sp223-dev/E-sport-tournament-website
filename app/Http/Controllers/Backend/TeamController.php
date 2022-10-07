<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myteam;

class TeamController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $teams = Myteam::all();
       return view('backend.team.index_team', compact('teams') );
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $teams = Myteam::all();
       return view('backend.team.create_team', compact('teams') );
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       // $data = $request->all();
       
       $file = $request->file('image');
       $filename = time().'_'.$file->getClientOriginalName();

       // File extension
       // $extension = $file->getClientOriginalExtension();

       // File upload location
       $location = 'image/teams/';

       // Upload file
       $file->move($location, $filename);
       
       // File path
       $filepath = url('image/teams/'.$filename);

       $teams = new Myteam();
       $teams->nama = $request->nama;
       $teams->country = $request->country;
       $teams->ground = $request->ground;
       $teams->head_coach = $request->head_coach;
       $teams->founded = $request->founded;
       $teams->president = $request->president;
       $teams->championship = $request->championship;
       $teams->date = $request->date;
       $teams->time = $request->time;
       $teams->image = $filename;
    //    $teams->players_id=  $request->players_id;
       $teams-> save();

       return redirect()->route('team-home');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
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
    $teams = Myteam::findOrFail($id);
    return view('backend.team.edit_team', compact('teams') );
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
           'nama' => 'required',
           'image' => 'required',
           'country' => 'required',
           'founded' => 'required',
           'ground' => 'required',
           'president' => 'required',
           'head_coach' => 'required',
           'championship' => 'required',
           'date' => 'required',
           'time' => 'required'
       ]);
        
       $update = [
           'nama' => $request->nama, 
           'image' => $request->image,
           'country' => $request->country,
           'founded' => $request->founded,
           'ground' => $request->ground,
           'president' => $request->president,
           'head_coach' => $request->head_coach,
           'championship' => $request->championship,
           'date' => $request->date,
           'time' => $request->time
       ];

       if ($files = $request->file('image')) {
          $destinationPath = 'image/teams/'; // upload path
          $profileImage = time() . "." . $files->getClientOriginalExtension();
          $image = $files->move($destinationPath, $profileImage);
          $update['image'] = $profileImage;
       }
        
       $update['nama'] = $request->get('nama');
       $update['country'] = $request->get('country');
       $update['founded'] = $request->get('founded');
       $update['ground'] = $request->get('ground');
       $update['president'] = $request->get('president');
       $update['head_coach'] = $request->get('head_coach');
       $update['championship'] = $request->get('championship');
       $update['date'] = $request->get('date');
       $update['time'] = $request->get('time');
       Myteam::where('id',$id)->update($update);
  
       return redirect()->route('team-home');
   

   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
        MyTeam::find($id)->delete();
       return redirect()->route('team-home');
   }
}
