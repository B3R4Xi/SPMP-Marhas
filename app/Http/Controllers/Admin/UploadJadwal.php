<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UploadJadwal as ImportsUploadJadwal;
use App\Models\Upload;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UploadJadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload = Upload::orderBy('mata_pelajaran', 'asc')
            ->orderBy('kelas', 'asc')
            ->get();
        // dd($upload);
        // $upload = $upload->all();
        return view('admin.upload.index_upload', compact('upload'));
    }

    public function importJadwal(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $name_file = rand() . $file->getClientOriginalName();

        $file->move('file_jadwal', $name_file);

        Excel::import(new ImportsUploadJadwal, public_path('/file_jadwal/' . $name_file));

        // Session::flash('sukses','Jadwal Berhasil Diupload!');
        // return  redirect()->back()->with('sukses', 'Jadwal Berhasil DiUpload !');
        return response()->json(['success' => 'File Uploaded Successfully']);
    }
}
