<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class ViewJadwal extends Controller
{
    //
    public function index()
    {
        $upload = Upload::get();
        return view('halaman_jadwal', compact('upload'));
    }
}
