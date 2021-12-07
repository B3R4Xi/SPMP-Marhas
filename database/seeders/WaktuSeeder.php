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
                'waktu_selesai'    => '07:40',
                'range'            => '07:15 - 07:40',
                'jumlah_jam'       => '1',
            ],[
                'kode_waktu'       => 'Waktu02',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '08:05',
                'range'            => '07:15 - 08:05',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu03',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '08:30',
                'range'            => '07:15 - 08:30',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu04',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '08:55',
                'range'            => '07:15 - 08:55',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu05',
                'waktu_mulai'      => '07:40',
                'waktu_selesai'    => '08:30',
                'range'            => '07:40 - 08:30',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu06',
                'waktu_mulai'      => '07:40',
                'waktu_selesai'    => '08:55',
                'range'            => '07:40 - 08:55',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu07',
                'waktu_mulai'      => '08:05',
                'waktu_selesai'    => '08:55',
                'range'            => '08:05 - 08:55',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu08',
                'waktu_mulai'      => '09:20',
                'waktu_selesai'    => '10:10',
                'range'            => '09:20 - 10:10',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu09',
                'waktu_mulai'      => '09:20',
                'waktu_selesai'    => '10:35',
                'range'            => '09:20 - 10:35',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu10',
                'waktu_mulai'      => '09:20',
                'waktu_selesai'    => '11:00',
                'range'            => '09:20 - 11:00',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu11',
                'waktu_mulai'      => '11:00',
                'waktu_selesai'    => '12:40',
                'range'            => '11:00 - 12:40',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu12',
                'waktu_mulai'      => '09:20',
                'waktu_selesai'    => '12:40',
                'range'            => '12:15 - 12:40',
                'jumlah_jam'       => '8',
            ],[
                'kode_waktu'       => 'Waktu13',
                'waktu_mulai'      => '13:00',
                'waktu_selesai'    => '13:50',
                'range'            => '13:00 - 13:50',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu14',
                'waktu_mulai'      => '13:00',
                'waktu_selesai'    => '14:15',
                'range'            => '13:00 - 14:15',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu15',
                'waktu_mulai'      => '13:00',
                'waktu_selesai'    => '14:40',
                'range'            => '13:50 - 14:15',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu16',
                'waktu_mulai'      => '13:25',
                'waktu_selesai'    => '14:15',
                'range'            => '13:25 - 14:15',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu17',
                'waktu_mulai'      => '13:25',
                'waktu_selesai'    => '14:40',
                'range'            => '13:25 - 14:40',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu18',
                'waktu_mulai'      => '13:25',
                'waktu_selesai'    => '15:05',
                'range'            => '13:25 - 15:05',
                'jumlah_jam'       => '4',
            ],[
                'kode_waktu'       => 'Waktu19',
                'waktu_mulai'      => '13:50',
                'waktu_selesai'    => '14:40',
                'range'            => '13:50 - 14:40',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu20',
                'waktu_mulai'      => '13:50',
                'waktu_selesai'    => '15:05',
                'range'            => '13:25 - 15:05',
                'jumlah_jam'       => '3',
            ],[
                'kode_waktu'       => 'Waktu21',
                'waktu_mulai'      => '14:15',
                'waktu_selesai'    => '15:05',
                'range'            => '14:15 - 15:05',
                'jumlah_jam'       => '2',
            ],[
                'kode_waktu'       => 'Waktu22',
                'waktu_mulai'      => '07:15',
                'waktu_selesai'    => '12:15',
                'range'            => '07:15 - 12:15',
                'jumlah_jam'       => '10',
            ]
        ]);
    }
}
