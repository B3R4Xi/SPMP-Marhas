<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hari;
use App\Models\Timeday;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $data_hari   =   DB::table('tbl_hari')->count();
        $hari = Hari::orderBy('id');
        if (!empty($request->search)) 
        {
            $hari = $hari->where('nama_hari', 'LIKE', '%' .$request->search. '%');
        }
        $hari = $hari->paginate(4);
        return view('admin.hari.daftarhari',compact('hari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.hari.tambahDataHari');
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
            'kode_hari' => 'required|unique:tbl_hari',
            'nama_hari' => 'required',
        ],[
            'kode_hari.required' => 'Data Wajib Diisi !',
            'nama_hari.required' => 'Data Wajib Diisi !',
        ]);

        $hari = new Hari();
        $hari->kode_hari=$request->kode_hari;
        $hari->nama_hari=$request->nama_hari;
        $hari->save();
        return redirect()->route('hari.index')->with('success',"Data berhasil ditambahkan !")
        ->with('failed','Gagal gan !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hari = Hari::where('id',$id)->get();
        return view('admin.hari.updateDataHari',compact('hari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'kode_hari'=>'required',
            'nama_hari'=>'required',
        ],[
            'kode_hari.required' => 'Data wajib diisi!',
            'nama_hari.required' => 'Data wajib diisi!',
        ]);

        $hari       = Hari::find($id);
        $kode_hari  = $request->input('kode_hari');
        $nama_hari  = $request->input('nama_hari');
        $hari->kode_hari = $request->input('kode_hari');
        $hari->nama_hari = $nama_hari;
        $hari->save();

        return redirect()->route('hari.index')->with('success', 'Update Data Berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timeday = Timeday::where('hari_id', $id)->first();
        if (!empty($timeday)) 
        {
            return redirect()->route('timedays.index')->with('danger', 'Anda Harus Menghapus Data Waktu Dan Jam Terlebih Dahulu');
        } else {
            Hari::find($id)->delete();
        }
            return redirect()->route('hari.index')->with('success', 'Hari berhasil dihapus');
    }
}
