<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'tbl_jadwal';
    protected $guarded = [];

    const BEGINNILAI = 1;
    const JUMAT      = 5;
    
    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');
    }

    public function teach()
    {
        return $this->belongsTo(Teach::class, 'teach_id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id');
    }

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_id');
    }
}
