<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;


    //menentukan nama tabel
    protected $table = 'pelanggan';


    //menentukan primary key
    protected $primaryKey ='id_pelanggan';

    //melindungi agar kolom tidak bisa diisi
    protected $guard = 'id_pelanggan';

    //untuk menyembunyikan sebuah kolom
    protected $hidden = '';
     

    
}
