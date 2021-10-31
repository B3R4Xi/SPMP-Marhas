<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_kelas')->insert([
            [
                'kode_kelas'    =>  '1',
                'nama_kelas'    =>  'X RPL 1',
            ],[
                'kode_kelas'    =>  '1',
                'nama_kelas'    =>  'X RPL 2',
            ],[
                'kode_kelas'    =>  '1',
                'nama_kelas'    =>  'X RPL 3',
            ],[
                'kode_kelas'    =>  '1',
                'nama_kelas'    =>  'X RPL 4',
            ],[
                'kode_kelas'    =>  '2',
                'nama_kelas'    =>  'XI RPL 1',
            ],[
                'kode_kelas'    =>  '2',
                'nama_kelas'    =>  'XI RPL 2',
            ],[
                'kode_kelas'    =>  '2',
                'nama_kelas'    =>  'XI RPL 3',
            ],[
                'kode_kelas'    =>  '2',
                'nama_kelas'    =>  'XI RPL 4',
            ],[
                'kode_kelas'    =>  '3',
                'nama_kelas'    =>  'XII RPL 1',
            ],[
                'kode_kelas'    =>  '3',
                'nama_kelas'    =>  'XII RPL 2',
            ],[
                'kode_kelas'    =>  '3',
                'nama_kelas'    =>  'XII RPL 3',
            ],[
                'kode_kelas'    =>  '3',
                'nama_kelas'    =>  'XII RPL 4',
            ]
            
            ]);
    }
}
