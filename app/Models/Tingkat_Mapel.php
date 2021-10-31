<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat_Mapel extends Model
{
    use HasFactory;
    protected $table = 'tbl_tingkat';
    protected $guarded = [];


    public function daftarMapel()
    {
        return $this->belongsTo(DaftarMapelModel::class);
    }
}
