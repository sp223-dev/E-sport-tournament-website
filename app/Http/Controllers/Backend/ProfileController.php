<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::all();

        return view('backend.user.index_user', compact('profile'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = User::all();
        return $profile;
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
        $location = 'image/profile/';

        // Upload file
        $file->move($location, $filename);
        
        // File path
        $filepath = url('image/profile/'.$filename);

        $profile = new User();
        $profile->image = $request->image;
        $profile->fullname = $request->fullname;
        $profile->nasionality = $request->nasionality;
        $profile->born = $request->born;
        $profile->language = $request->language;
        $profile->phone = $request->phone;
        $profile->hobi = $request->hobi;
        $profile->about= $request->about;
        $profile->email = $request->email;
        $profile->image = $filename;
        $profile-> save();

        return redirect()->route('profile-home');
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
        //
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
            'name' => 'required',
            'fullname' =>'required', 
            'nasionality' => 'required',
            'born' => 'required',
            'language' => 'required', 
            'phone' => 'required', 
            'hobi' =>  'required',
            'about' =>  'required',
            'email' => 'required', 
            'image' => 'required',
           
        ]);
         
        $update = [
            'name' => $request->name, 
            'fullname' => $request->fullname, 
            'nasionality' => $request->nasionality, 
            'born' => $request->born, 
            'language' => $request->language, 
            'phone' => $request->phone, 
            'hobi' => $request->hobi, 
            'about' => $request->about, 
            'email' => $request->email,  
            'image' => $request->image
        ];
 
        if ($files = $request->file('image')) {
           $destinationPath = 'image/profile/'; // upload path
           $profileImage = time() . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $update['image'] = "$profileImage";
        }
         
        $update['name'] = $request->get('name');
        $update['fullname'] = $request->get('fullname');
        $update['nasionality'] = $request->get('nasionality');
        $update['born'] = $request->get('born');
        $update['language'] = $request->get('language');
        $update['phone'] = $request->get('phone');
        $update['hobi'] = $request->get('hobi');
        $update['about'] = $request->get('about');
        $update['email'] = $request->get('email');
    
        User::where('id',$id)->update($update);
   
        return redirect()->route('profile-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('profile-home');

       
    }

    
}
