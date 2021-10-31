<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table='tbl_kelas';

    protected $fillable =
    [
        'kode_kelas',
        'nama_kelas'
    ];

    public function tingkatkelas()
    {
        return $this->belongsTo(Tingkat_Mapel::class, 'kode_kelas');
    }
}
