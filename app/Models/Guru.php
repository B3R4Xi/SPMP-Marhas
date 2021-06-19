<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table='tbl_guru';

    protected $fillable=[
        'kode_guru', 'NIP','nama', 'alamat', 'no_hp', 'email', 'foto'
    ];
}
