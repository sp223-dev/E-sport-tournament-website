<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfileEditController extends Controller
{
    public function index()
    {
        
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile.profile-edit', compact('user'));
    }
    public function update(Request $request)
    {
    	 

    	$user = User::where('id', Auth::user()->id)->first();
		if($request->hasfile('image')) {
            $image = $request->file('image');
            $fileName = str_random(30).'.'.$image->getClientOriginalExtension();
            $imageName = $fileName;
            $image->move('image/profile/', $fileName);
        
        }else {
            $fileName = 'noimage.png';
        }
		$user->image = $fileName;
    	$user->name = $request->name;
		$user->fullname = $request->fullname;
		$user->nasionality = $request->nasionality;
		$user->born = $request->born;
		$user->language = $request->language;
		$user->phone = $request->phone;
    	$user->email = $request->email;
        $user->about = $request->about;
		$user->hobi = $request->hobi;
		$user->save();
    	
    	
    	
    	$user->update();

    	return redirect('profile');
    }
}
