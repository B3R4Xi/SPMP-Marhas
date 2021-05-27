<?php

namespace App\Http\Controllers;
use App\Models\DaftarMapelModel;

use Illuminate\Http\Request;

class DaftarMapelController extends Controller
{

    public function __construct()
    {
        $this->DaftarMapelModel = new DaftarMapelModel();
    }

    public function index()
    {
        $data = [
                'mapel'=> $this->DaftarMapelModel->allData(),
        ];
        return view('admin.daftar-mapel', $data);
    }
}
