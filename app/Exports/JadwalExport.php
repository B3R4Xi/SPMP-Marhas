<?php

namespace App\Exports;


use App\Models\Jadwal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class JadwalExport implements
    FromCollection,
    WithMapping,
    WithHeadings,
    ShouldAutoSize,
    WithStyles,
    WithDrawings,
    WithCustomStartCell

{

    protected $id;
    function __construct($id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Jadwal::where('type', $this->id)->orderBy('hari_id', 'asc')->orderBy('waktu_id', 'asc')->get();
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
        return
            [
                [
                    'Hari',
                    'Jam Pelajaran',
                    'Pengajar',
                    'Mata Pelajaran',
                    'Kelas',
                    'Ruangan',
                    'Type',
                    'Nilai Jadwal',
                ]
            ];
    }
    public function styles(Worksheet $worksheet)
    {
        $worksheet->getStyle('A6:H6')->applyFromArray(['font' => ['bold' => true]])
            ->getFill()->applyFromArray(['fillType' => 'solid', 'rotation' => 0, 'color' => ['rgb' => 'D9D9D9'], 'setAligment' => 'center']);
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/logo.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('A1');

        return $drawing;
    }

    public function startCell(): string
    {
        return 'A6';
    }
}
