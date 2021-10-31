<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tbl_guru')->insert([
            [
                'kode_guru'     => 'GURU01',
                'nip'           => '1',
                'nama_lengkap'  => 'Ramdani, S.Kom',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-838-555-898',
                'email'         => 'ramdani@gmail.com',
            ],[
                'kode_guru'     => 'GURU02',
                'nip'           => '2',
                'nama_lengkap'  => 'Fitrianingsih, S.Kom',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-878-555-113',
                'email'         => 'fitri@gmail.com',
            ],[
                'kode_guru'     => 'GURU03',
                'nip'           => '3',
                'nama_lengkap'  => 'Rinny Nuraeni, S.Kom',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-899-555-439',
                'email'         => 'rinny@gmail.com',
            ],[
                'kode_guru'     => 'GURU04',
                'nip'           => '4',
                'nama_lengkap'  => 'M Taufik Azhari S.T',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-878-555-034',
                'email'         => 'mtaufik@gmail.com',
            ],[
                'kode_guru'     => 'GURU05',
                'nip'           => '5',
                'nama_lengkap'  => 'Yeti',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-878-555-963',
                'email'         => 'yeti@gmail.com',
            ],[
                'kode_guru'     => 'GURU06',
                'nip'           => '6',
                'nama_lengkap'  => 'Kusmiadi, ST',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-898-555-295',
                'email'         => 'kusmiadi@gmail.com',
            ],[
                'kode_guru'     => 'GURU07',
                'nip'           => '7',
                'nama_lengkap'  => 'Mochamad Sidik, Amd.Kom',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-838-555-004',
                'email'         => 'mochsidik@gmail.com',
            ],[
                'kode_guru'     => 'GURU08',
                'nip'           => '8',
                'nama_lengkap'  => 'Endi',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-897-555-041',
                'email'         => 'endi@gmail.com',
            ],[
                'kode_guru'     => 'GURU09',
                'nip'           => '9',
                'nama_lengkap'  => 'Riska',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-897-555-241',
                'email'         => 'riska@gmail.com',
            ],[
                'kode_guru'     => 'GURU10',
                'nip'           => '10',
                'nama_lengkap'  => 'Roni',
                'alamat'        => 'SMK Marhas',
                'no_hp'         => '+62-897-245-241',
                'email'         => 'roni@gmail.com',
            ],
        ]);
    }
}
