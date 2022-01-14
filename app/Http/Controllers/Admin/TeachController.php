<?php

namespace App\Http\Controllers\Admin;


use App\Models\DaftarMapelModel;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Teach;
use App\Http\Controllers\Controller;
use App\Models\Tingkat_Mapel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeachController extends Controller
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
    public function index(Request $request)
    {
        $search = $request->input('search');
        $teach  = Teach::whereHas('guru', function ($query) use ($search) {
            if (!empty($search)) {
                $query = $query->where('tbl_guru.nama_lengkap', 'LIKE', '%' . $search . '%');
            }
        });
        $teach  = $teach->paginate(5);
        if (Auth::user()->level_id === 1) {
            return view('admin.teach.daftarPengampu', compact('teach'));
        } elseif (Auth::user()->level_id === 2) {
            return view('guru.teach.G_daftarPengampu', compact('teach'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mapel  = DaftarMapelModel::orderBy('nama_mapel', 'asc')->pluck('nama_mapel', 'id_mapel');
        $guru   = Guru::orderBy('nama_lengkap', 'asc')->pluck('nama_lengkap', 'id');
        $kelas  = Kelas::orderBy('nama_kelas', 'asc')->pluck('nama_kelas', 'id');
        $tingkat_mapel = Tingkat_Mapel::orderBy('tingkat_mapel', 'asc')->pluck('tingkat_mapel', 'id');
        return view('admin.teach.tambahDataPengampu', compact('mapel', 'guru', 'kelas', 'tingkat_mapel'));
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
            'tm'            => 'required',
            'mapel'         => 'required',
            'nama_guru'     => 'required',
            'kelas_dept'    => 'required',
            'tahun_ajaran'  => 'required',
        ], [
            'tm.required'            => 'Data wajib diisi!',
            'mapel.required'         => 'Data wajib diisi!',
            'nama_guru.required'     => 'Data wajib diisi!',
            'kelas_dept.required'    => 'Data wajib diisi!',
            'tahun_ajaran.required'  => 'Data wajib diisi!',
        ]);
        $teach      = new Teach();
        $teach->id_mapel = $request->mapel;
        $teach->id_guru = $request->nama_guru;
        $teach->id_kelas = $request->kelas_dept;
        $teach->tahun_ajaran = $request->tahun_ajaran;
        $teach->id_tingkat = $request->tm;
        $teach->id_user = Auth::user()->id;
        // dd($teach);
        $teach->save();

        return redirect()->route('teach.index')->with('success', 'Tambah Data Pengampu Berhasil');
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
        $teach  = Teach::where('id', $id)->get();
        $id_tingkat = $teach[0]->id_tingkat;
        $mapel  = DaftarMapelModel::where('tingkat_mapel_id', $id_tingkat)->orderBy('nama_mapel', 'asc')->get();
        $guru   = Guru::orderBy('nama_lengkap', 'asc')->get();
        $kelas  = Kelas::where('kode_kelas', $id_tingkat)->orderBy('nama_kelas', 'asc')->get();
        $tingkat_mapel = Tingkat_Mapel::orderBy('tingkat_mapel', 'asc')->get();
        // echo $id_tingkat;exit;
        return view('admin.teach.updateDataPengampu', compact('teach', 'tingkat_mapel', 'guru', 'mapel', 'kelas'));
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
            'id_mapel'         => 'required',
            'id_guru'     => 'required',
            'id_kelas'         => 'required',
            'tahun_ajaran'  => 'required',
        ], [
            'id_mapel.required'         => 'Data wajib diisi!',
            'id_guru.required'     => 'Data wajib diisi!',
            'id_kelas.required'         => 'Data wajib diisi!',
            'tahun_ajaran.required'  => 'Data wajib diisi!',
        ]);
        $teach      = new Teach();
        $teach->id_mapel = $request->id_mapel;
        $teach->id_guru = $request->id_guru;
        $teach->id_kelas = $request->id_kelas;
        $teach->tahun_ajaran = $request->tahun_ajaran;
        $teach = Teach::find($id)->update(request()->all());
        return redirect()->route('teach.index')->with('success', 'Upadate Data Pengampu Berhasil');
    }


    public function getKelas($id)
    {
        $getkelas = DB::table("tbl_kelas")->where("kode_kelas", $id)->pluck("nama_kelas", "id");
        return json_encode($getkelas);
    }

    public function getMapel($id)
    {
        $getkelas = DB::table("tbl_mapel")->where("tingkat_mapel_id", $id)->pluck("nama_mapel", "id_mapel");
        return json_encode($getkelas);
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
        $delete = Teach::where('id', $id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('success', 'Delete Berhasil !');
    }
}
