<?php namespace app\GeneticAlgo;

use App\Models\Teach;
use App\Models\Hari;
use App\Models\Jadwal;
use App\Models\lab;
use App\Models\Waktu;
use App\Models\Timenotavailable;
use Illuminate\Console\Scheduling\Schedule;
// use DB;
use Illuminate\Support\Facades\DB as DB;

class GenerateAlgorithm
    {
        public function randKromoson($kromosom, $count_teach, $input_year, $input_semester)
        {
            Jadwal::truncate();
            // echo $input_semester;exit;
            for ($i=0; $i < $kromosom; $i++) 
            { 
                $values = [];
                for ($j=0; $j < $count_teach; $j++) { 
                    $teach = Teach::whereHas('mapel', function ($query) use ($input_semester)
                    {
                        $query->where('tbl_mapel.semester_id', $input_semester);
                    });
                    
                    $hari   = Hari::inRandomOrder()->first();
                    $teach  = $teach->where('tahun_ajaran', $input_year)->inRandomOrder()->first();
                    $lab    = Lab::where('jenis_lab_id', $teach->mapel->jenis_mapel_id)->inRandomOrder()->first();
                    $waktu  = Waktu::where('jumlah_jam', $teach->mapel->jumlah_jam)->inRandomOrder()->first();
                    // echo json_encode($lab);exit;

                    $params = [
                        'teach_id'  => $teach->id,
                        'hari_id'   => $hari->id,
                        'waktu_id'  => $waktu->id,
                        'lab_id'    => $lab->id,
                        'type'      => $i +1,
                    ];
                    // echo $params;exit;
                    // dd($params);
                    Jadwal::create($params);
                }
                $data[] = $values;
            }
            return $data;
        }

        public function checkPinalty()
        {
            $jadwals =  Jadwal::select(DB::raw('teach_id, hari_id, waktu_id, lab_id, type, count(*) as `jumlah`'))
            ->groupBy('teach_id')
            ->groupBy('hari_id')
            ->groupBy('waktu_id')
            ->groupBy('lab_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1 )
            ->get();
            // dd($jadwals);
            
            $hasil_jadwals = $this->increaseProccess($jadwals);
            // echo json_encode($jadwals);exit;
            $jadwals =  Jadwal::select(DB::raw('teach_id, hari_id, waktu_id, lab_id, type, count(*) as `jumlah`'))
            ->groupBy('teach_id')
            ->groupBy('hari_id')
            ->groupBy('waktu_id')
            ->groupBy('lab_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();
            
            $hasil_jadwals = $this->increaseProccess($jadwals);

            $jadwals = Jadwal::select(DB::raw('waktu_id, hari_id, lab_id,type, count(*) as `jumlah`'))
            ->groupBy('waktu_id')
            ->groupBy('hari_id')
            ->groupBy('lab_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();

            $hasil_jadwals = $this->increaseProccess($jadwals);

            $jadwals = Jadwal::join('tbl_teach','tbl_teach.id', '=', 'tbl_jadwal.teach_id')
            ->join('tbl_guru','tbl_guru.id', '=', 'tbl_teach.id_guru')
            ->select(DB::raw('id_guru,hari_id,waktu_id,type, count(*) as `jumlah`'))
            ->groupBy('id_guru')
            ->groupBy('hari_id')
            ->groupBy('waktu_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();

            $hasil_jadwals = $this->increaseProccess($jadwals);

            $jadwals = Jadwal::where('hari_id', Schedule::FRIDAY)->whereIn('waktu_id', [11])->get();

            if (!empty($jadwals)) 
            {
                foreach ($jadwals as $key => $jadwal)
                {
                    $jadwal->value         = $jadwal->value +1;
                    $jadwal->value_process = $jadwal->value_process . "+1";
                    $jadwal->save();
                }    
            }

            $time_not_avails = Timenotavailable::get();
            if(!empty($time_not_avails))
            {
                foreach ($time_not_avails as $k => $time_not_avail)
                {
                    $jadwals = Jadwal::whereHas('teach', function ($query) use ($time_not_avail)
                    {
                        $query = $query->whereHas('guru', function ($q) use ($time_not_avail)
                        {
                            $q->where('tbl_guru.id', $time_not_avail->guru_id);
                        });
                    });

                    $jadwals = $jadwals->where('hari_id', $time_not_avail->hari_id)->where('waktu_id', $time_not_avail->waktu_id)->get();

                    if (!empty($jadwals)) 
                    {
                        foreach ($jadwals as $key => $jadwal)    
                        {
                            $jadwal->value              = $jadwal->value +1;
                            $jadwal->value_process      = $jadwal->value_process. "+1";
                            $jadwal->save();
                        }
                    }
                }
            }
            $jadwals = Jadwal::get();
            
            foreach($jadwals as $key => $jadwal)
            {
                $jadwal->value = 1/ (1+$jadwal->value);
                $jadwal->save();
            }
            return $jadwals;
        }
        
        public function increaseProccess($jadwals = [])
        {
            if (!empty($jadwals))
            {
                foreach ( $jadwals as $key => $jadwal)
                {
                    if ($jadwal-> jumlah >1) 
                    {
                        $jadwal_dimanas = Jadwal::where('type', $jadwal->type)->get();
                        foreach ( $jadwal_dimanas as $key => $jadwal_dimana)
                        {
                            $jadwal_dimana->value           = $jadwal_dimana->value + ($jadwal->jumlah - 1);
                            $jadwal_dimana->value_process   = $jadwal_dimana->value_process . "+" . ($jadwal->jumlah-1);
                            $jadwal_dimana->save();
                        }
                    }
                }
            }
            return $jadwals;
            
        }
    }


?>
