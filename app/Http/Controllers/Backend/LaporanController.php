<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index() {
    
        return view('backend.store.laporan.index');
    }

    public function proses() {
        
        return view('backend.store.laporan.proses');
    }
}
