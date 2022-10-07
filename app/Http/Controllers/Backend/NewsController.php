<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('backend.news.index_news', compact('news')); 
    }
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Category::all();
        $news = News::all();
        return view('backend.news.create_news', ['kategori' => $kategori]);
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
        $location = 'image/news/';

        // Upload file
        $file->move($location, $filename);
        
        // File path
        $filepath = url('image/news/'.$filename);

        $news = new News();
        $news->judul = $request->judul;
        $news->category_id = $request->category_id;
        $news->deskripsi = $request->deskripsi;
        $news->dates = $request->dates;
        $news->author = $request->author;
        $news->image = $filename;
        $news-> save();

        return redirect()->route('news-home');
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
        $news = News::findorFail($id) ;
        return view('backend.news.edit_news', compact('news'));
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required',
           
        ]);
         
        $update = [
            'judul' => $request->judul, 
            'image' => $request->image, 
            'deskripsi' => $request->deskripsi
        ];
 
        if ($files = $request->file('image')) {
           $destinationPath = 'image/news/'; // upload path
           $profileImage = time() . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $update['image'] = "$profileImage";
        }
         
            $update['judul'] = $request->get('judul');
            $update['dates'] = $request->get('dates');
            $update['author'] = $request->get('author');
            $update['deskripsi'] = $request->get('deskripsi');
    
        News::where('id',$id)->update($update);
   
        return redirect()->route('news-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->route('news-home')->with('status', 'pppp');
    }
}
