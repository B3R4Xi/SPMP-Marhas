<?php

namespace App\Exports;


use App\Models\Jadwal;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportAll implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{


    public function query()
    {   
        return Jadwal::query()->orderBy('type', 'asc')->orderBy('hari_id', 'asc');
    }

    public function map($jadwals): array
    {
        $jadwal     = Jadwal::get();
        return
        [
            $jadwals->hari->nama_hari,
            $jadwals->waktu->range,
            $jadwals->teach->guru->nama_lengkap,
            $jadwals->teach->mapel->nama_mapel,
            $jadwals->teach->kelas->nama_kelas,
            $jadwals->lab->nama_lab,
            $jadwals->type,
            $jadwals->value,

        ];
    }

    public function headings(): array
    {
        return [
            'Hari',
            'Jam Pelajaran',
            'Pengajar',
            'Mata Pelajaran',
            'Kelas',
            'Ruangan',
            'Type',
            'Nilai Jadwal',
        ];
    }

    public function styles(Worksheet $worksheet)
    {
        return
        [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
