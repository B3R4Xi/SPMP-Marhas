<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportAll;
use App\Exports\JadwalExport;
use App\Models\Guru;
use App\Models\Semester;
use App\Models\Teach;
use App\GeneticAlgo\GenerateAlgorithm;
use App\Models\Jadwal;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use PhpOffice\PhpSpreadsheet\Writer\Pdf;
use PDF;

class GenetikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester   = Semester::get();
        $tahun      = Teach::select('tahun_ajaran')->groupBy('tahun_ajaran')->pluck('tahun_ajaran', 'tahun_ajaran');

        return view ('admin.genetic.indexGenetic', compact('tahun','semester'));
    }

    // Fungsi sumbit

    public function submit(Request $request)
    {
        $tahun              = Teach::select('tahun_ajaran')->groupBy('tahun_ajaran')->pluck('tahun_ajaran', 'tahun_ajaran');
        $input_kromosom     = $request->input('kromosom');
        $input_tahun        = $request->input('tahun');
        $input_semester     = $request->input('semester');
        $input_generasi     = $request->input('generasi');
        $input_crossover    = $request->input('crossover');
        $input_mutasi       = $request->input('mutasi');
        $count_guru         = Guru::count();
        $count_pengampu     = Teach::count();
        // echo json_encode($count_guru);exit;
        $kromosom           = $input_kromosom * $input_generasi;
        $crossover          = $input_kromosom * $input_crossover;
        $generate           = new GenerateAlgorithm;
        $data_kromosoms     = $generate->randKromoson($kromosom,$count_pengampu,$input_tahun,$input_semester);
        $result_jadwals     = $generate->checkPinalty();
        
        
        $total_gen          = Setting::firstOrNew(['key' => 'total_gen']);
        $total_gen->name    = 'Total Gen';
        $total_gen->value   = $crossover;
        $total_gen->save();

        $mutasi             = Setting::firstOrNew(['key' => 'mutasi']);
        $mutasi->name       = 'Mutasi';
        $mutasi->value      = (3 * $count_pengampu) * $input_kromosom * $input_mutasi;
        $mutasi->save();

        return redirect()->route('admin.genetic.result', 1);
    }


    public function result($id)
    {
        $tahun      = Teach::select('tahun_ajaran')->groupBy('tahun_ajaran')->pluck('tahun_ajaran', 'tahun_ajaran');
        $kromosom   = Jadwal::select('type')->groupBy('type')->get()->count();
        $crossover  = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi     = Setting::where('key', Setting::MUTASI)->first();
        $value_jadwal = Jadwal::where('type', $id)->first();
        $jadwals      = Jadwal::orderBy('hari_id','desc')
            ->orderBy('waktu_id', 'desc')
            ->where('type', $id)
            ->paginate(15);
        // dd($jadwals)
        // echo json_encode($tahun);exit;
        if (empty($value_jadwal)) 
        {
            abort(404);
        }

        for ($i=1; $i <= $kromosom; $i++) 
        { 
            $value_jadwals = Jadwal::where('type', $i)->first();
            $data_kromosom[] = [
                'value_jadwals' => $value_jadwals->value,
            ];
        }
        return view('admin.genetic.result', compact('jadwals','tahun', 'data_kromosom','id','value_jadwal','crossover','mutasi'));
    }


    //export function
    public function export(Request $request)
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new JadwalExport($request->id), 'Jadwal Type -'.($request->id).'.xlsx');
    }

    public function exportPDF(Request $request)
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new JadwalExport($request->id), 'Jadwal Type -'.($request->id).'.pdf',\Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function exportAll()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new ExportAll, 'Hasil Generate Jadwal-(All Type).xlsx');
    }

    public function exportAllPDF()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new exportAll,'invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
