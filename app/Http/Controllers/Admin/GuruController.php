<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Guru::orderBy('id');
        if (!empty($request->search))
        {
            $data = $data->where('nama_lengkap', 'LIKE', '%' .$request->search. '%');
        }
        $data = $data->paginate(4);
        return view('admin.guru.daftarGuru', ['guru'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.tambahDataGuru');
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
                'nip' => 'required|unique:tbl_guru,nip|max:255',
                'kode_guru' => 'required',
                'email'=>'required|email',
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'no_hp'=>'required|min:11|numeric',
            ]);

            $guru = new Guru();
            $guru->nip=$request->nip;
            $guru->kode_guru=$request->kode_guru;
            $guru->email=$request->email;
            $guru->nama_lengkap=$request->nama_lengkap;
            $guru->alamat=$request->alamat;
            $guru->no_hp=$request->no_hp;
            $guru->save();
            return redirect()->route('daftarguru.index')->with('success',"Data berhasil ditambahkan !")
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
        return view('admin.guru.updateDataGuru');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru, $id)
    {
        //
        $guru=Guru::where('id', $id)->get();
        return view('admin.guru.updateDataGuru',compact('guru'));
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
            'nip'=>'required',
            'kode_guru'=>'required',
            'email'=>'required',
            'nama_lengkap'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ],[
            'nip.required' => 'Data wajib diisi!',
            'kode_guru.required' => 'Data wajib diisi!',
            'email.required' => 'Data wajib diisi!',
            'nama_lengkap.required' => 'Data wajib diisi!',
            'alamat.required' => 'Data wajib diisi!',
            'no_hp.required' => 'Data wajib diisi!'
        ]);
        $guru=Guru::find($id)->update(request()->all());
        return redirect()->route('daftarguru.index')->with('success','Update Berhasil !');
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
        $delete=Guru::where('id',$id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('success','Delete Berhasil !');
    }
}
