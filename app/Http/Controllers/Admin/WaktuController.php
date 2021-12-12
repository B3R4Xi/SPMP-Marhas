<?php

namespace App\Http\Controllers\Admin;

use App\Models\r;
use App\Models\Timeday;
use App\Models\Waktu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaktuController extends Controller
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
        $data= DB::table('tbl_waktu')->paginate(4);
        return view('admin.waktu.daftarwaktu',['waktu'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.waktu.tambahDataWaktu');
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
        //
        $request->validate([
            'kode_waktu' => 'required|unique:tbl_waktu',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'jumlah_jam' => 'required',
            
        ],[
            'kode_waktu.required' => 'Data wajib diisi!',
            'waktu_mulai.required' => 'Data wajib diisi!',
            'waktu_selesai.required' => 'Data wajib diisi!',
            'jumlah_jam.required' => 'Data wajib diisi!',
            
        ]);

        $waktu = new Waktu();
        $waktu->kode_waktu=$request->kode_waktu;
        $waktu->waktu_mulai=$request->waktu_mulai;
        $waktu->waktu_selesai=$request->waktu_selesai;
        $waktu->jumlah_jam=$request->jumlah_jam;
        $waktu->range=$request->input('waktu_mulai'). " - " . $request->input('waktu_selesai');
        $waktu->save();
        return redirect()->route('waktu.index')->with('success',"Data berhasil ditambahkan !")
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
        $waktu=Waktu::where('id',$id)->get();
        
        return view('admin.waktu.updateDatakWaktu',compact('waktu'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'kode_waktu' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'jumlah_jam' => 'required',
        ],[
            'kode_waktu.required' => 'Data wajib diisi!',
            'waktu_mulai.required' => 'Data wajib diisi!',
            'waktu_selesai.required' => 'Data wajib diisi!',
            'jumlah_jam.required' => 'Data wajib diisi!',
        ]);

        $waktu          = Waktu::find($id);
        $waktu_mulai    = $request->input('waktu_mulai');
        $waktu_selesai  = $request->input('waktu_selesai');
        $jumlah_jam  = $request->input('jumlah_jam');
        $range          = $request->input('waktu_mulai') . " - " . $request->input('waktu_selesai');
        $waktu->kode_waktu      = $request->input('kode_waktu');
        $waktu->waktu_mulai     = $waktu_mulai;
        $waktu->waktu_selesai   = $waktu_selesai;
        $waktu->jumlah_jam   = $jumlah_jam;
        $waktu->range           = $range;
        $waktu->save(); 

        return redirect()->route('waktu.index')->with('success','Update Data Berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        {
            $timeday = Timeday::where('waktu_id', $id)->first();
            if (!empty($timeday)) 
            {
                return redirect()->route('timedays.index')->with('danger', 'Anda Harus Menghapus Data Waktu Dan Jam Terlebih Dahulu');
            } else {
                Waktu::find($id)->delete();
            }
                return redirect()->route('waktu.index')->with('success', 'Data Waktu berhasil dihapus');
        }
    }
}
