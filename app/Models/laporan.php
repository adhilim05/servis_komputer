<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'laporan'; 

     //menentukan primary key
     protected $primaryKey ='id_laporan';
 
     //melindungi agar kolom tidak bisa diisi
     protected $guard = 'id_laporan';
 
     //untuk menyembunyikan sebuah kolom
     protected $hidden = '';
}
