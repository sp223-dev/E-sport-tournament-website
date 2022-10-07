<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myteam2;

class Myteam2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Myteam2::all();
        return view('backend.team2.index_team2', compact('teams') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Myteam2::all();
        return view('backend.team2.create_team2', compact('teams') );
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
 
        $teams = new Myteam2();
        $teams->nama = $request->nama;
<<<<<<< HEAD
=======
        $teams->match_id = $request->match_id;
>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
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
 
        return redirect()->route('team-home2');
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
     $teams = Myteam2::findOrFail($id);
     return view('backend.team2.edit_team2', compact('teams') );
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
<<<<<<< HEAD
            'time' => 'required'
=======
            'time' => 'required',
            'match_id' => 'required'
>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
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
           $files->move($destinationPath, $profileImage);
           $update['image'] = "$profileImage";
        }
         
        $update['nama'] = $request->get('nama');
        Myteam2::where('id',$id)->update($update);
   
        return redirect()->route('team-home2');
    
 
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Myteam2::find($id)->delete();
        return redirect()->route('team-home2');
    }
}
