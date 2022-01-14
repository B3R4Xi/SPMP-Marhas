<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Jadwal;
use App\Models\Lab;
use App\Models\Setting;
use App\Models\Teach;
use App\Models\Upload;
use App\Models\Waktu;
use Illuminate\Http\Request;

class APIcontroller extends Controller
{
    public function getApiHari()
    {
        $hari   = Hari::select('nama_hari')->get();
        $waktu  = Waktu::select('range')->get();
        return response()->json([
            'success'   => true,
            'message'   => 'Berhasil',
            'data'      => $hari
        ], 200);
    }

    public function getApiWaktu()
    {
        $waktu  = Waktu::select('range')->get();
        return response()->json([
            'success'   => true,
            'message'   => 'Berhasil',
            'data'      => $waktu
        ], 200);
    }

    public function showClassesApi($id)
    {
        $tahun  = Teach::select('tahun_ajaran')->groupBy('tahun_ajaran')->pluck('tahun_ajaran', 'tahun_ajaran');
        $kelas  = Teach::select('id_kelas')->groupBy('id_kelas')->havingRaw('COUNT(*) > 1')->get();
        $kromosom = Jadwal::select('type')->groupBy('type')->get()->count();
        $crossover = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi = Setting::where('key', Setting::MUTASI)->first();
        $value_jadwal = Jadwal::where('type', $id)->first();

        $guru = Guru::select('id', 'nama_lengkap')->get();
        $lab = Lab::select('id', 'nama_lab')->get();


        $jadwal = Jadwal::orderBy('hari_id', 'desc')
            ->orderBy('waktu_id', 'desc')
            ->where('type', $id)
            ->select(
                'tbl_jadwal.id',
                'tbl_jadwal.type',
                'tbl_jadwal.teach_id',
                'tbl_jadwal.hari_id',
                'tbl_jadwal.waktu_id',
                'tbl_jadwal.lab_id',
                'tbl_jadwal.value',
                'tbl_jadwal.value_process'
            )->get();

        if (empty($value_jadwal)) {
            abort(404);
        }

        for ($i = 1; $i <= $kromosom; $i++) {
            $value_jadwals = Jadwal::where('type', $i)->first();
            $data_kromosom[] = [
                'value_jadwals' => $value_jadwals->value,
            ];
        }

        $hari   = Hari::select('nama_hari')->get();
        $waktu  = Waktu::select('range')->get();
        $jadwals = [];

        foreach ($jadwal as $jad) {
            foreach ($waktu as $wak) {
                if ($jad->waktu->range == $wak->range) {
                    $jadwals[$jad->hari_id][$jad->hari->nama_hari]["{$wak->range}"][] = '(' . $jad->teach->mapel->nama_mapel . ' - ' . $jad->teach->guru->nama_lengkap . ' - ' . $jad->teach->kelas->nama_kelas . ' - ' . $jad->lab->nama_lab . ')';
                    // echo json_encode($jadwals);exit;
                }
            }
        }

        return response()->json([
            'success'   => true,
            'message'   => 'Berhasil',
            'data'      => $jadwals
        ], 200);
    }
}
