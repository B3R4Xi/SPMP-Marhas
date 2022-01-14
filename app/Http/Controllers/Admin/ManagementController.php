<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Level;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagementController extends Controller
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
        $users = User::orderBy('id');
        $users = $users->paginate(5);
        return view('admin.management.managementMenu', compact('users'));
        // echo 'test';
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
        $level  = Level::orderBy('level', 'asc')->pluck('level', 'id');
        return view('admin.management.tambahUser', compact('level', 'guru'));
    }


    //AJAX Function

    public function getGuru($id)
    {
        $getGuru = DB::table('tbl_guru')->where('id', $id)->first();
        // return json_encode($getGuru);
        return response()->json([
            'getGuru' => $getGuru,
        ]);
    }
    public function getGuruAlamat($id)
    {
        $getGuruAlamat = DB::table('tbl_guru')->where('id', $id)->pluck('alamat', 'id');
        return json_encode($getGuruAlamat);
    }

    public function getGuruNohp($id)
    {
        $getGuruNohp = DB::table('tbl_guru')->where('id', $id)->pluck('no_hp', 'id');
        return json_encode($getGuruNohp);
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
            'nama_'              => 'required|unique:tbl_users,name',
            'email'             => 'required',
            'alamat'            => 'required',
            'no_hp'             => 'required',
            'password'           => 'required',
            'conf-password'      => 'required',
        ], [
            'nama_.required'             => 'Data wajib diisi!',
            'email_.required'            => 'Data wajib diisi!',
            'alamat_.required'           => 'Data wajib diisi!',
            'no_hp_.required'            => 'Data wajib diisi!',
            'password.required'         => 'Data wajib diisi!',
        ]);

        $users = new User();
        $users->name = $request->input('nama_');
        $users->email = $request->input('email');
        $users->alamat = $request->input('alamat');
        $users->no_hp = $request->input('no_hp');
        $users->password = Hash::make($request->input('password'));
        $users->level_id = $request->input('level');
        $users->save();
        // echo $users;exit;
        // dd($users);
        // return response()->json($users);
        return redirect()->route('management.index')->with('success', 'Tambah User Berhasil');
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
        $users = User::where('id', $id)->get();
        $guru   = Guru::orderBy('nama_lengkap', 'asc')->pluck('nama_lengkap', 'id');
        $level  = Level::orderBy('level', 'asc')->pluck('level', 'id');


        return view('admin.management.editUser', compact('users', 'guru', 'level'));
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
    }
}
