<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MatpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_mapel')->insert([
            [
                'kode_mapel'        => 'MP01',
                'nama_mapel'        => 'Fisika',
                'tingkat_mapel_id'  => '1',
                'semester_id'       => '1',
                'jumlah_jam'        => '2',
                'jenis_mapel_id'    => '1',
            ],[
                'kode_mapel'        => 'MP02',
                'nama_mapel'        => 'Kimia',
                'tingkat_mapel_id'  => '1',
                'semester_id'       => '1',
                'jumlah_jam'        => '2',
                'jenis_mapel_id'    => '1',
            ],[
                'kode_mapel'        => 'MP03',
                'nama_mapel'        => 'Siskomdig',
                'tingkat_mapel_id'  => '1',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP04',
                'nama_mapel'        => 'Sistem Komputer',
                'tingkat_mapel_id'  => '1',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP05',
                'nama_mapel'        => 'Komputer & Jaringan Dasar',
                'tingkat_mapel_id'  => '1',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP06',
                'nama_mapel'        => 'Pemrograman Dasar',
                'tingkat_mapel_id'  => '1',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP07',
                'nama_mapel'        => 'Pemodelan Perangkat Lunak',
                'tingkat_mapel_id'  => '2',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP08',
                'nama_mapel'        => 'Basis Data I',
                'tingkat_mapel_id'  => '2',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP09',
                'nama_mapel'        => 'Pemrograman Web & Bergerak I',
                'tingkat_mapel_id'  => '2',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP10',
                'nama_mapel'        => 'PBO I',
                'tingkat_mapel_id'  => '2',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP11',
                'nama_mapel'        => 'Produk Kreatif Kewirausahaan I',
                'tingkat_mapel_id'  => '2',
                'semester_id'       => '1',
                'jumlah_jam'        => '2',
                'jenis_mapel_id'    => '1',
            ],[
                'kode_mapel'        => 'MP12',
                'nama_mapel'        => 'Blender I',
                'tingkat_mapel_id'  => '2',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP13',
                'nama_mapel'        => 'PBO II',
                'tingkat_mapel_id'  => '3',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP14',
                'nama_mapel'        => 'Basis Data II',
                'tingkat_mapel_id'  => '3',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP15',
                'nama_mapel'        => 'Pemrograman Web & Bergerak II',
                'tingkat_mapel_id'  => '3',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],[
                'kode_mapel'        => 'MP16',
                'nama_mapel'        => 'Produk Kreatif Kewirausahaan II',
                'tingkat_mapel_id'  => '3',
                'semester_id'       => '1',
                'jumlah_jam'        => '2',
                'jenis_mapel_id'    => '1',
            ],[
                'kode_mapel'        => 'MP17',
                'nama_mapel'        => 'Blender II',
                'tingkat_mapel_id'  => '3',
                'semester_id'       => '1',
                'jumlah_jam'        => '4',
                'jenis_mapel_id'    => '2',
            ],

        ]);    
    }
    
}
