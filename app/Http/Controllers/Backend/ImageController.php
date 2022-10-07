<?php

namespace App\Http\Controllers\Backend;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Request $request) {
<<<<<<< HEAD
=======


>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
        $itemuser = $request->user();
        $itemgambar = Image::where('user_id', $itemuser->id)->paginate(20);
        return view('backend.store.image.index', compact('itemgambar'))->with('no', ($request->input('page', 1) - 1) * 20);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $itemuser = $request->user();
        $fileupload = $request->file('image');
        $folder = 'assets/images';
        $itemgambar = $this->upload($fileupload, $itemuser, $folder);
        return back()->with('success', 'Image berhasil diupload', compact('itemgambar'));
    }

    public function destroy(Request $request, $id) {
        $itemuser = $request->user();
        $itemgambar = Image::where('user_id', $itemuser->id)
                            ->where('id', $id)
                            ->first();
        if ($itemgambar) {
            Storage::delete($itemgambar->url);
            $itemgambar->delete();
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function upload($fileupload, $itemuser, $folder) {
        $path = $fileupload->store('files');
        $inputangambar['url'] = $path;
        $inputangambar['user_id'] = $itemuser->id;
        return Image::create($inputangambar);
<<<<<<< HEAD
=======

>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
    }

    
     
}
