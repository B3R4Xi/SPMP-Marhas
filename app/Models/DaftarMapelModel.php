<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DaftarMapelModel extends Model
{
    protected $table='tbl_mapel';
    protected $primaryKey = 'id_mapel';

    protected $fillable =
    [
        'kode_mapel', 'nama_mapel', 'tingkat_mapel'
    ];
}
