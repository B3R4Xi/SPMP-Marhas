<?php

namespace Database\Seeders;

use App\Models\Jenis_Mapel;
use Illuminate\Database\Seeder;

class JenisMatpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jenis = [
            [
                'jenis_mapel'      => 'TEORI',            
            ],[
                'jenis_mapel'      => 'PRAKTEK',            
            ]
            ];
            foreach ($jenis as $key => $value) {
                Jenis_Mapel::create($value);
            }
    }
}
