<?php

namespace App\Models;

use App\Models\pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangServis extends Model
{
    use HasFactory;
    
     //menentukan nama tabel
     protected $table = 'barang_servis'; 

     //menentukan primary key
     protected $primaryKey ='id_servis';
 
     //melindungi agar kolom tidak bisa diisi
     protected $guarded = ['id_servis'];
 
     //untuk menyembunyikan sebuah kolom
     protected $hidden = '';

     public function pelanggan(){
        return $this->belongsTo(pelanggan::class,"id_pelanggan");  
     }
}
