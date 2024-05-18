<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarangServis extends Model
{
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'detail_barang_servis'; 

     //menentukan primary key
     protected $primaryKey ='id_detail_servis';
 
     //melindungi agar kolom tidak bisa diisi
     protected $guarded = ['id_detail_servis'];
 
     //untuk menyembunyikan sebuah kolom
     protected $hidden = '';
}
