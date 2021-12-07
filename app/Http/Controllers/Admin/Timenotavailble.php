<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Timenotavailable;
use App\Models\Waktu;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Time\Time;
use Illuminate\Http\Request;

class Timenotavailble extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $timenotavailable = Timenotavailable::whereHas('guru',function($query) use ($search)
        {
            if (!empty($search)) {
                $query = $query->where('tbl_guru.nama_lengkap', 'LIKE', '%' .$search. '%');
            }
        });
        $timenotavailable = $timenotavailable->paginate(5);
        return view('admin.timenotavailable.index', compact('timenotavailable'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $guru   = Guru::orderBy('nama_lengkap', 'asc')->pluck('nama_lengkap', 'id');
        $hari   = Hari::orderBy('nama_hari', 'desc')->pluck('nama_hari', 'id');
        $waktu  = Waktu::orderBy('range', 'asc')->pluck('range', 'id');

        return view('admin.timenotavailable.create', compact('guru','hari','waktu'));
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
            'nama_lengkap'=>'required',
            'hari'=>'required',
            'waktu'=>'required',
        ],[
            'nama_lengkap.required' => 'Data Wajib Diisi !',
            'hari.required' => 'Data Wajib Diisi !',
            'waktu.required' => 'Data Wajib Diisi !'
        ]);

        $timenotavailable = new Timenotavailable();
        $timenotavailable->guru_id=$request->nama_lengkap;
        $timenotavailable->hari_id=$request->hari;
        $timenotavailable->waktu_id=$request->waktu;
        $timenotavailable->save();

        return redirect()->route('timenotavailable.index')->with('success','Tambah Data Berhasil !');
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
        $timenotavailable   = Timenotavailable::where('id',$id)->get();
        $guru   = Guru::get();
        $hari   = Hari::get();
        $waktu  = Waktu::get();

        return view('admin.timenotavailable.update', compact('timenotavailable','guru','hari','waktu'));
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
            'hari_id'=>'required',
            'waktu_id'=>'required',
        ],[
            'hari_id.required' => 'Data Wajib Diisi !',
            'waktu_id.required' => 'Data Wajib Diisi !'
        ]);

        $timenotavailable   = new Timenotavailable();
        $timenotavailable->guru_id=$request->input('guru_id');
        $timenotavailable->hari_id=$request->input('hari_id');
        $timenotavailable->waktu_id=$request->input('waktu_id');

        $timenotavailable=Timenotavailable::find($id)->update(request()->all());
        return redirect()->route('timenotavailable.index')->with('success','Update Berhasil');
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
        Timenotavailable::find($id)->delete();
        return redirect()->route('timenotavailable.index')->with('success','Data Berhasil Dihapus !');
    }
}
