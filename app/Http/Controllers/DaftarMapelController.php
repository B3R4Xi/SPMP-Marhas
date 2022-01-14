<?php

namespace App\Http\Controllers;

use App\Models\DaftarMapelModel;

use Illuminate\Http\Request;

class DaftarMapelController extends Controller
{
    public function index()
    {
        $data = DaftarMapelModel::all();
        return view('admin.daftar-mapel', ['mapel' => $data]);
    }

    public function add()
    {
        return view('admin.tambahDataMapel');
    }

    public function insert(Request $request)
    {
        $mapel = $request->validate([
            'kode_mapel' => 'required|unique:tbl_mapel,kode_mapel|max:255',
            'nama_mapel' => 'required',
            'tingkat_mapel' => 'required',
        ], [
            'kode_mapel.required' => 'Data wajib diisi!',
            'nama_mapel.required' => 'Data wajib diisi!',
            'tingkat_mapel.required' => 'Data wajib diisi!'
        ]);

        DaftarMapelModel::create($mapel);

        return redirect('/daftarmapel')->with('success', "Data berhasil ditambahkan !")
            ->with('failed', 'Gagal gan !');
    }

    // public function delete($id_mapel)
    // {
    //     $mapel = DaftarMapelModel::find($id_mapel);
    //     $mapel->delete();
    //     return redirect()->back();
    // }

    // public function edit(Request $request, $id_mapel)
    // {
    //     if($request->isMethod('post')){
    //         $data = $request->all();

    //         DaftarMapelModel::where(['id_mapel'=>$id_mapel])->update(['kode_mapel'=>['kode_mapel'],'nama_mapel'=>['nama_mapel'],'tingkat_mapel'=>['tingkat_mapel']]);
    //         return redirect()->back()->with('success-update','Update Berhasil !');
    //     }
    // }

    public function getMapelData($id_mapel)
    {
        $data = DaftarMapelModel::find($id_mapel);
        return response()->json($data);
    }
}
