<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabController extends Controller
{
    public function index()
    {
        $data=  DB::table('tbl_lab')->paginate(4);
        return view('admin.lab.ruanganlab', ['lab'=>$data]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lab.tambahDataLab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'kode_lab' => 'required|unique:tbl_lab|max:255',
                'nama_lab' => 'required',
                'kapasitas'=> 'required|numeric',
            ],[
                'kode_lab.required' => 'Data wajib diisi!',
                'nama_lab.required' => 'Data wajib diisi!',
                'kapasitas.required' => 'Data wajib diisi!'
            ]);

            $lab = new Lab();
            $lab->kode_lab=$request->kode_lab;
            $lab->nama_lab=$request->nama_lab;
            $lab->kapasitas=$request->kapasitas;
            $lab->save();
            return redirect()->route('lab.index')->with('success',"Data berhasil ditambahkan !")
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
        return view('admin.guru.updateDataGuru',compact(''));
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
                $lab=Lab::where('id', $id)->get();
                return view('admin.lab.updateLab',compact('lab'));
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
        $request->validate([
            'kode_lab' => 'required',
            'nama_lab' => 'required',
            'kapasitas'=> 'required|numeric',
        ],[
            'kode_lab.required' => 'Data wajib diisi!',
            'nama_lab.required' => 'Data wajib diisi!',
            'kapasitas.required' => 'Data wajib diisi!'
        ]);

        $lab = new Lab();
        $lab->kode_lab=$request->kode_lab;
        $lab->nama_lab=$request->nama_lab;
        $lab->kapasitas=$request->kapasitas;
        $lab=Lab::find($id)->update(request()->all());
        return redirect()->route('lab.index')->with('success','Update Berhasil !');
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
        $delete=Lab::where('id',$id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('success','Delete Berhasil !');
    }
}
