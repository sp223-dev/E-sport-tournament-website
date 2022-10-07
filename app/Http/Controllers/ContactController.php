<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }
  
    public function thanks()
    {
        return view('thanks');
    }

    public function create()
    {
        //
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:12|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
    