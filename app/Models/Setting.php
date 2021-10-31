<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table    = 'tbl_setting';
    protected $guarded  = [];

    const CROSSOVER = 'total_gen';
    const MUTASI    = 'mutasi';
}
