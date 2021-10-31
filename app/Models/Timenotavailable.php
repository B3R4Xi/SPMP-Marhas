<?php

namespace App\Models;

use App\Models\Guru;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timenotavailable extends Model
{
    protected $table    = 'tbl_timenotavailable';
    protected $guarded  = [];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class,'waktu_id');
    }

}
