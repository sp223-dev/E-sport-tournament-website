<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenggunaController extends Controller
{
    public function index() {

        return view('backend.store.pengguna.index');
    }

    public function setting() {
        return view('backend.store.pengguna.setting');
    }
}
