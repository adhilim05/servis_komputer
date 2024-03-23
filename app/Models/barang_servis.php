<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_servis extends Model
{
    use HasFactory;
    
     //menentukan nama tabel
     protected $table = 'barang_servis'; 

     //menentukan primary key
     protected $primaryKey ='id_servis';
 
     //melindungi agar kolom tidak bisa diisi
     protected $guard = 'id_servis';
 
     //untuk menyembunyikan sebuah kolom
     protected $hidden = '';
}
