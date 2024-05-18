<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth-login');
});
Route::get('/dashboard', function () {
    return view('welcome');
});
Route::post('/login',[AuthController::class,'login'])->name('login.proses');
Route::get("/admin/dashboard", [DashboardController::class, 'dashboard_admin'])->name("admin.dashboard");
Route::get("/admin/transaksi", [TransaksiController::class, 'index'])->name("transaksi.index");
Route::get("/admin/transaksi/{id}", [TransaksiController::class, 'show'])->name("transaksi.show");
Route::post("/admin/transaksi/post", [TransaksiController::class, 'store'])->name("transaksi.store");

Route::get("/admin/transaksi/create", [TransaksiController::class, 'create'])->name("transaksi.create");
Route::get("/admin/pelanggan/create", [PelangganController::class, 'create'])->name("pelanggan.create");
Route::get("/admin/pelanggan", [PelangganController::class, 'index'])->name("pelanggan.index");
Route::post("/admin/pelanggan/post", [PelangganController::class, 'store'])->name("pelanggan.store");
