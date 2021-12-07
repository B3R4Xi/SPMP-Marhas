<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $mapel  =   DB::table('tbl_mapel')->count();
        $guru   =   DB::table('tbl_guru')->count();
        $kelas   =   DB::table('tbl_kelas')->count();
        $lab   =   DB::table('tbl_lab')->count();
        return view('admin.dashboard',compact('mapel','guru','kelas','lab'));
    }
}
