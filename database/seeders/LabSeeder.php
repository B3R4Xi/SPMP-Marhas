<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_lab')->insert([
            [
                'kode_lab'          => 'Lab02',
                'nama_lab'          => 'R.Lab02',
                'kapasitas'         => '30',
                'jenis_lab_id'      => '2',
            ],
            [
                'kode_lab'          => 'Lab03',
                'nama_lab'          => 'R.Lab03',
                'kapasitas'         => '30',
                'jenis_lab_id'      => '2',
            ],[
                'kode_lab'          => 'Lab04',
                'nama_lab'          => 'R.Lab04',
                'kapasitas'         => '30',
                'jenis_lab_id'      => '2',
            ],[
                'kode_lab'          => 'Lab05',
                'nama_lab'          => 'R.Lab05',
                'kapasitas'         => '30',
                'jenis_lab_id'      => '2',
            ],[
                'kode_lab'          => 'R01',
                'nama_lab'          => 'R01',
                'kapasitas'         => '35',
                'jenis_lab_id'      => '1',
            ],[
                'kode_lab'          => 'R02',
                'nama_lab'          => 'R02',
                'kapasitas'         => '35',
                'jenis_lab_id'      => '1',
            ],
        ]);
    }
}
