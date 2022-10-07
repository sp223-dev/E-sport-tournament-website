<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myteam;
use App\Coach;
class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::with('myteam')->get();
        return view('backend.coach.index', compact('coaches'));
    }

    public function create()
    {
        $team = Myteam::all();
        return view('backend.coach.create', compact('team'));
    }

    public function store(Request $request)
    {
        
         
        $file = $request->file('image');
        $filename = time().'_'.$file->getClientOriginalName();

        // File extension
        // $extension = $file->getClientOriginalExtension();

        // File upload location
        $location = 'image/coach/';

        // Upload file
        $file->move($location, $filename);
        
        // File path
        $filepath = url('image/player'.$filename);

        $coach = new Coach();
        $coach->nama = $request->nama;
        $coach->team_id =  $request->team_id;
        $coach->kebangsaan = $request->kebangsaan;
        $coach->posisi = $request->posisi;
        $coach->umur = $request->umur;
        $coach->seasons = $request->seasons;
        $coach->about = $request->about;
        $coach->image = $filename;
        $coach-> save();

        return redirect()->route('coach-home')->with('success', 'data berhasil di tambahkan ');
    }

    public function edit($id)
    {
        $teams = Myteam::all();
        $coaches = Coach::with('myteam')->findorFail($id) ;
        return view('backend.coach.edit', compact('coaches', 'teams'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image'=> 'required',
            'nama' => 'required',
            'kebangsaan' => 'required',
            'posisi' => 'required',
            'umur' => 'required',
            'seasons' => 'required',
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
            'about' => $request->about, 
            'team_id'=>$request->team_id,
           
        ];
 
        if ($files = $request->file('image')) {
           $destinationPath = 'image/coach/'; // upload path
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
    
        Coach::where('id',$id)->update($update);
 
        return redirect()->route('coach-home');
    }

    public function destroy($id)
    {
        $coaches = Coach::find($id);
        $coaches->delete();
        return redirect()->route('coach-home');
    }

}
