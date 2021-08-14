<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $table='tbl_lab';

    protected $fillable =
    [
        'kode_lab',
        'nama_lab',
        'kapasitas'
    ];

}
