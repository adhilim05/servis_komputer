<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admin extends Model
{
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'admin'; 

     //menentukan primary key
     protected $primaryKey ='id_admin';
 
     //melindungi agar kolom tidak bisa diisi
     protected $guard = 'id_admin';
 
     //untuk menyembunyikan sebuah kolom
     protected $hidden = 'kata_sandi_admin';
     
     public static function attemptLogin($email, $kata_sandi)
    {
        $user = self::where('email',$email)->first();
        
        if ($user && Hash::check($kata_sandi, $user->kata_sandi_admin)){
            return $user;
        }
        return null;
    }
}
