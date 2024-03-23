<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_barang_servis extends Model
{
    use HasFactory;
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'detail_barang_servis'; 

     //menentukan primary key
     protected $primaryKey ='id_detail_servis';
 
     //melindungi agar kolom tidak bisa diisi
     protected $guard = 'id_detail_servis';
 
     //untuk menyembunyikan sebuah kolom
     protected $hidden = '';
}
