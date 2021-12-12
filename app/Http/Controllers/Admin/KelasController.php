<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kelas;
use App\Models\Tingkat_Mapel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    
    public function __construct()
    {
     $this->middleware('admin')->only('delete');
     $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = DB::table('tbl_kelas')->paginate(4);
        $kelas = Kelas::orderBy('kode_kelas');
        $kelas = $kelas->paginate(5);
        return view('admin.kelas.daftarKelas',compact('kelas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tingkat_mapel  =   Tingkat_Mapel::orderBy('tingkat_mapel', 'asc')->pluck('tingkat_mapel', 'id');
        return view('admin.kelas.tambahDataKelas', compact('tingkat_mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);

        $kelas = new Kelas();
        $kelas->kode_kelas=$request->kode_kelas;
        $kelas->nama_kelas=$request->nama_kelas;
        $kelas->save();
        return redirect()->route('kelas.index')->with('success',"Data berhasil ditambahkan !")
        ->with('failed','Gagal gan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kelas=Kelas::where('id',$id)->get();
        $tingkat_mapel = Tingkat_Mapel::get();
        
        return view('admin.kelas.updateDataKelas',compact('kelas','tingkat_mapel'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'kode_kelas'=>'required',
            'nama_kelas'=>'required',
        ],[
            'kode_kelas.required' => 'Data wajib diisi!',
            'nama_kelas.required' => 'Data wajib diisi!',
        ]);
        $kelas=Kelas::find($id)->update(request()->all());
        return redirect()->route('kelas.index')->with('success','Update Berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Kelas::find($id)->delete();
        return redirect()->route('kelas.index')->with('success','Waktu berhasil dihapus');
    }
}
