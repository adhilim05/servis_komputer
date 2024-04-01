<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login (Request $request){
        $validate = Validator ::make($request->all(),[
            'email' => 'string|required',
            'kata_sandi' => 'string|required',
        ]);
        if($validate->fails()) {
            return redirect('/login')-> with ('gagal','validasi gagal');
        }
        $email = $request->input('email');

        $kata_sandi = $request->input("kata_sandi");

        $auth = admin::attemptLogin($email, $kata_sandi);


        if($auth){
            //Khusus yang ada rolenya
            // if (Auth::user()->role == "admin"){
            //     return redirect ('/dashboard admin');
            // }elseif (Auth::user()->role == "pelanggan")
            // {
            return redirect ('/dashboard');
            

        }else {
            return back ()->with ('Gagal','Email atau Kata Sandi salah');
        }
    }
    }
    

    

