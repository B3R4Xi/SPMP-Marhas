<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahDataMapelController extends Controller
{
    public function index()
    {
        return view('admin.tambahDataMapel');
    }
}
