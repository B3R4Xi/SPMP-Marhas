<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;
    protected $table = 'tbl_hari';

    protected $fillable = 
    [
        'kode_hari',
        'nama_hari'
    ];
}
