<?php

namespace App\Imports;

use App\Models\Upload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UploadJadwal implements ToModel, WithStartRow
{
    
    public function startRow(): int
    {
        return (2);   
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Upload([
            //
            'hari'              => $row[0],
            'waktu'             => $row[1],
            'pengajar'          => $row[2],
            'mata_pelajaran'    => $row[3],
            'kelas'             => $row[4],
            'ruangan'           => $row[5],
            'type'              => $row[6],
        ]);
    }
}
