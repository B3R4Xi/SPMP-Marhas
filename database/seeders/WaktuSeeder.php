<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_waktu')->insert([
            [
                'kode_waktu'       => 'Waktu01',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '08:55',
                'range'            => '07:15 - 08:55',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu02',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '08:30',
                'range'            => '07:15 - 08:30',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu03',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '08:05',
                'range'            => '07:15 - 08:05',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu04',
                'waktu_mulai'      => '09:20',
                'waktu_selesai'    => '10:10',
                'range'            => '09:20 - 10:10',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu05',
                'waktu_mulai'      => '09:20',
                'waktu_selesai'    => '11:00',
                'range'            => '09:20 - 11:00',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu06',
                'waktu_mulai'      => '11:00',
                'waktu_selesai'    => '12:40',
                'range'            => '11:00 - 12:40',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu07',
                'waktu_mulai'      => '13:00',
                'waktu_selesai'    => '13:50',
                'range'            => '13:00 - 13:50',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu08',
                'waktu_mulai'      => '13:25',
                'waktu_selesai'    => '15:05',
                'range'            => '13:25 - 15:05',
                'jumlah_jam'       => '4',
            ]
        ]);
    }
}
