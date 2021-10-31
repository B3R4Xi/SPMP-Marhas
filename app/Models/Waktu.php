<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    use HasFactory;
    protected $table = 'tbl_waktu';

    protected $fillable =
    [
        'kode_waktu',
        'waktu_mulai',
        'waktu_selesai',
        'range',
        'jumlah_jam'
    ];
}
