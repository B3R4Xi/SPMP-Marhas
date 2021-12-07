<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hari;
use App\Models\Timeday;
use App\Models\Waktu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TimedaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $timedays = Timeday::orderBy('id', 'desc')->paginate(4);
        return view('admin.timedays.index', compact('timedays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hari   = Hari::orderBy('nama_hari', 'asc')->pluck('nama_hari','id');
        $waktu  = Waktu::orderBy('range', 'asc')->pluck('range', 'id');

        return view('admin.timedays.create', compact('hari','waktu'));
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
            'kode_timedays'=>'required',
            'hari'=>'required',
            'waktu'=>'required',
        ],[
            'kode_timedays.required' => 'Data wajib diisi!',
            'hari.required' => 'Data wajib diisi!',
            'waktu.required' => 'Data wajib diisi!',
        ]);

        $timedays       = new Timeday();
        $timedays->kode_timedays=$request->kode_timedays;
        $timedays->hari_id=$request->hari;
        $timedays->waktu_id=$request->waktu;
        $timedays->save();

        return redirect()->route('timedays.index')->with('success', 'Tambah Data Berhasil !');
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
        // $hari    = Hari::orderBy('nama_hari','asc')->pluck('nama_hari','id');
        // $waktu   = Waktu::orderBy('range', 'asc')->pluck('range', 'id');
        $timedays   =   Timeday::where('id',$id)->get();
        $hari       =   Hari::get();
        $waktu      =   Waktu::get();

        return view('admin.timedays.update', compact('timedays','hari','waktu'));
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
            'kode_timedays'=>'required',
            'hari_id'=>'required',
            'waktu_id'=>'required',
        ],[
            'kode_timedays.required' => 'Data wajib diisi!',
            'hari_id.required' => 'Data wajib diisi!',
            'waktu_id.required' => 'Data wajib diisi!',
        ]);
        $timedays       = new Timeday();
        $timedays->kode_timedays=$request->input('kode_timedays');
        $timedays->hari_id=$request->input('hari_id');
        $timedays->waktu_id=$request->input('waktu_id');
        // $timedays->save();
        // dd($request);
        $timedays=Timeday::find($id)->update(request()->all());
        return redirect()->route('timedays.index')->with('success','Update Berhasil !');
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
        Timeday::find($id)->delete();
        return redirect()->route('timedays.index')->with('success','Data berhasil dihapus');
    }
}
