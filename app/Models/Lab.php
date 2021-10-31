<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $table='tbl_lab';

    protected $guarded =[];


    public function jenislab()
    {
        return $this->belongsTo(Jenis_Mapel::class,'jenis_lab_id');
    }
}
