<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarGuruController extends Controller
{
    public function index()
    {
        return view('admin.daftar-guru');
    }
}
