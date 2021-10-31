<?php

namespace App\Models;

use App\Models\Hari;
use App\Models\Waktu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeday extends Model
{
    use HasFactory;
    
    protected $table    = 'tbl_timedays';
    protected $guarded  = [];

    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');   
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id');
    }
}
