<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggan'));
        
    }
    public function create(){
        return view('admin.pelanggan.create');
    }
    function store(Request $request){
        $validasi = $request->validate([
            "nama_pelanggan" => "required|string|max:200",
            "email" => "required|string",
            "no_telepon" => "required|string"
        ]);
        pelanggan::create($validasi);
        Alert::success("berhasil","berhasil mendambah data pelanggan");
        return redirect()->back();
    }
}
