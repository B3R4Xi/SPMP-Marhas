<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->only('delete');
        $this->middleware('auth');
    }

    public function index()
    {
        $mapel    =   DB::table('tbl_mapel')->count();
        $guru     =   DB::table('tbl_guru')->count();
        $kelas    =   DB::table('tbl_kelas')->count();
        $lab      =   DB::table('tbl_lab')->count();
        $teach    =   DB::table('tbl_teach')->count();
        $jadwal   =   DB::table('tbl_jadwal')->count();
        return view('admin.dashboard', compact('mapel', 'guru', 'kelas', 'lab', 'jadwal', 'teach'));
    }
}
