<?php

namespace App\Http\Controllers;
use App\Models\DaftarMapelModel;

use Illuminate\Http\Request;

class DaftarMapelController extends Controller
{
    public function index()
    {
        $data=DaftarMapelModel::all();
        return view('admin.daftar-mapel', ['mapel'=>$data]);
    }


    // INSERT FUNCTION
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
            ],[
                'kode_mapel.required' => 'Data wajib diisi!',
                'nama_mapel.required' => 'Data wajib diisi!',
                'tingkat_mapel.required' => 'Data wajib diisi!'
            ]);

            DaftarMapelModel::create($mapel);

            return redirect('/daftarmapel')->with('success',"Data berhasil ditambahkan !")
            ->with('failed','Gagal gan !');
        }


    // UPADTE FUNCTION
        public function edit($id_mapel)
        {
            $mapel=DaftarMapelModel::where('id_mapel', $id_mapel)->get();
            return view('admin.updateDataMapel',['mapel'=>$mapel]);
        }

        public function update($id_mapel)
        {
            Request()->validate([
                'kode_mapel'=>'required',
                'nama_mapel'=>'required',
                'tingkat_mapel'=>'required'
            ],[
                'kode_mapel.required' => 'Data wajib diisi!',
                'nama_mapel.required' => 'Data wajib diisi!',
                'tingkat_mapel.required' => 'Data wajib diisi!'
            ]);
            $test=DaftarMapelModel::find($id_mapel)->update(request()->all());
            return redirect('/daftarmapel')->with('success','Update Berhasil !');
            
        }

        public function getMapelData($id_mapel)
        {
            $data = DaftarMapelModel::find($id_mapel);
            return response()->json($data);
        }

        public function delete($id_mapel)
        {
          $delete=DaftarMapelModel::where('id_mapel',$id_mapel)->firstOrFail();
          $delete->delete();
          return redirect()->back()->with('success','Delete Berhasil !');
        }


    }
