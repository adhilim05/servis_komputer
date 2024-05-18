<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Model\barang_servis;
use App\Models\BarangServis;
use Illuminate\Http\Request;
use App\Models\DetailBarangServis;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index()
    {
        $barangservis=BarangServis::with("pelanggan")->get();
        return view('admin.transaksi.index',compact('barangservis'));
    }
    public function show($id)
    {
        $detailbarang=BarangServis::where('id_servis',2)->get();

        return view('admin.transaksi.detail',compact("detailbarang"));
    }
    public function create()
    {
        $pelanggan = pelanggan::all();
        return view('admin.transaksi.create',compact("pelanggan"));
    }
    //simpan transaksi
    function store(Request $request){
        $validasi = $request->validate([
            "id_pelanggan"=>"required|string",
            "nama_barang"=>"required|string",
            "tgl_terima" => "required|date",
            "tgl_ambil" => "required|date",
            "model" => "required|string",
            "keluhan" => "required|string",
            "masalah" => "required|string",
            "biaya" => "required|integer",
            "status" => "required|in:Pending,On Progress,Completed",

        ]);
        $databarang=BarangServis::create([
            "id_pelanggan"=>$request->id_pelanggan,
            "nama_barang"=>$request->nama_barang,
        ]);
        DetailBarangServis::create([
            "id_servis"=> $databarang->id_servis,
            "tgl_terima" => $request->tgl_terima,
            "tgl_ambil" => $request->tgl_ambil,
            "model"=>$request->model,
            "keluhan"=>$request->keluhan,
            "masalah"=>$request->masalah,
            "biaya"=>$request->biaya,
            "status"=>$request->status,

        ]);
        

        Alert::success("berhasil","berhasil mendambah data pelanggan");
        return redirect()->back();
    }
}
