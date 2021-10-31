<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // FAKER 
        // $faker = Faker::create('id_ID');
        // for($i = 1; $i<=10;$i++){
        //INSERT INTO DB
        DB::table('tbl_hari')->INSERT([
            [
                'kode_hari'   => 'Hari01',
                'nama_hari'   => 'Senin',
            ],[
                'kode_hari'   => 'Hari02',
                'nama_hari'   => 'Selasa',
            ],[
                'kode_hari'   => 'Hari03',
                'nama_hari'   => 'Rabu',
            ],[
                'kode_hari'   => 'Hari04',
                'nama_hari'   => 'Kamis',
            ],[
                'kode_hari'   => 'Hari05',
                'nama_hari'   => 'Jumat',
            ],[
                'kode_hari'   => 'Hari06',
                'nama_hari'   => 'Sabtu',
            ]
        ]);
        

    }
    
}
