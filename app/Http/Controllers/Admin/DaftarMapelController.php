<?php

namespace App\Http\Controllers\Admin;

use App\Models\DaftarMapelModel;
use App\Models\Jenis_Mapel;
use App\Models\Semester;
use App\Models\Tingkat_Mapel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DaftarMapelController extends Controller
{

    public function __construct()
    {
     $this->middleware('admin')->only('delete');
     $this->middleware('auth'); 
    }

    public function index(Request $request)
    {

        $mapel = DaftarMapelModel::orderBy('id_mapel');
        // $tingkat_mapel = Tingkat_Mapel::get();
        if (!empty($request->search))
        {
            $mapel = $mapel->where('nama_mapel', 'LIKE', '%' . $request->search . '%');
        }

        
        $mapel= $mapel->paginate(5);
        return view('admin.mapel.daftar-mapel',compact('mapel'));
    }


    // INSERT FUNCTION
        public function add()
        {
            $tingkat_mapel  =   Tingkat_Mapel::orderBy('tingkat_mapel', 'asc')->pluck('tingkat_mapel', 'id');
            $semester       =   Semester::orderBy('semester', 'asc')->pluck('semester', 'id');
            $jenis_mapel    =   Jenis_Mapel::orderBy('jenis_mapel', 'asc')->pluck('jenis_mapel','id');

            return view('admin.mapel.tambahDataMapel',compact('tingkat_mapel','semester','jenis_mapel'));
        }

        public function insert(Request $request)
        {
            $mapel = $request->validate([
                'kode_mapel' => 'required|unique:tbl_mapel,kode_mapel|max:255',
                'nama_mapel' => 'required',
                'tingkat_mapel_id' => 'required',
                'semester_id' => 'required',
                'jumlah_jam' => 'required',
                'jenis_mapel_id' => 'required',
            ],[
                'kode_mapel.required' => 'Data wajib diisi!',
                'nama_mapel.required' => 'Data wajib diisi!',
                'tingkat_mapel_id.required' => 'Data wajib diisi!',
                'semester_id.required' => 'Data wajib diisi!',
                'jumlah_jam.required' => 'Data wajib diisi!',
                'jenis_mapel_id.required' => 'Data wajib diisi!',
            ]);

            // DaftarMapelModel::create($mapel);
            $mapel = new DaftarMapelModel();
            $mapel->kode_mapel=$request->input('kode_mapel');
            $mapel->nama_mapel=$request->input('nama_mapel');
            $mapel->tingkat_mapel_id=$request->input('tingkat_mapel_id');
            $mapel->semester_id=$request->input('semester_id');
            $mapel->jumlah_jam=$request->input('jumlah_jam');
            $mapel->jenis_mapel_id=$request->input('jenis_mapel_id');
            $mapel->save();

            return redirect('/daftarmapel')->with('success',"Data berhasil ditambahkan !")
            ->with('failed','Gagal gan !');
        }


    // UPADTE FUNCTION
        public function edit($id_mapel)
        {
            $mapel=DaftarMapelModel::where('id_mapel', $id_mapel)->get();
            $tingkat_mapel  = Tingkat_Mapel::get();
            $semester       = Semester::get();
            $jenis_mapel    = Jenis_Mapel::get();  
            return view('admin.mapel.updateDataMapel',compact('mapel','tingkat_mapel','semester','jenis_mapel'));
        }

        public function update(Request $request,$id_mapel)
        {
            Request()->validate([
                'kode_mapel'=>'required',
                'nama_mapel'=>'required',
                'tingkat_mapel_id'=>'required',
                'semester_id' => 'required',
                'jumlah_jam' => 'required',
                'jenis_mapel_id' => 'required'
            ],[
                'kode_mapel.required' => 'Data wajib diisi!',
                'nama_mapel.required' => 'Data wajib diisi!',
                'tingkat_mapel_id.required' => 'Data wajib diisi!',
                'semester_id.required' => 'Data wajib diiisi!',
                'jumlah_jam.required' => 'Data wajib diiisi!',
                'jenis_mapel_id.required' => 'Data wajib diiisi!',

            ]);

            $mapel = new DaftarMapelModel();
            $mapel->kode_mapel=$request->input('kode_mapel');
            $mapel->nama_mapel=$request->input('nama_mapel');
            $mapel->tingkat_mapel_id=$request->input('tingkat_mapel_id');
            $mapel->semester_id=$request->input('semester_id');
            $mapel->jumlah_jam=$request->input('jumlah_jam');
            $mapel->jenis_mapel_id=$request->input('jenis_mapel_id');



            $mapel=DaftarMapelModel::find($id_mapel)->update(request()->all());
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
