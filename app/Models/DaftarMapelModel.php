<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DaftarMapelModel extends Model
{
    protected $table='tbl_mapel';
    protected $primaryKey = 'id_mapel';

    protected $guarded =[];

    public function tingkatmapel()
    {
        return $this->belongsTo(Tingkat_Mapel::class, 'tingkat_mapel_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function jenismapel()
    {
        return $this->belongsTo(Jenis_Mapel::class,'jenis_mapel_id');
    }
}
