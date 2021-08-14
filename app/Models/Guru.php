<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table='tbl_guru';
    
    protected $fillable=[
                     'nip',
                     'kode_guru' ,
                     'email',
                     'nama_lengkap',
                     'alamat',
                     'no_hp',
    ];

    // public function getImages()
    // {
    //     if ($this->images && file_exists(public_path('img' . $this->images)))
    //         return asset('public/img' . $this->images);
    //     else
    //         return asset('public/img/no_image.jpg');
    // }

    // function delete_image()
    // {
    //     if ($this->image && file_exists(public_path('img' . $this->image)))
    //         return unlink(public_path('img' . $this->image));
    // }
}