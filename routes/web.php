<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});
Route::get('/Lab', function () {
    return view('Ruang_Lab');
});
Route::get('/Kelas', function () {
    return view('Ruang_Kelas');
});
Route::get('/Isi_Kelas', function () {
    return view('Dasar.isi_ruang');
});
Route::get('/Isi_LAB', function () {
    return view('Dasar.isi_ruang');
});
Route::get('/Tambah_Barang', function () {
    return view('venta.Tambah_Barang');
});
Route::get('/Barcode', function () {
    return view('venta.barcode');
});
Route::get('/pengajuan', function () {
    return view('venta.pengajuan');
});
Route::get('/pengajuan_isi', function () {
    return view('venta.isi_Pengajuan');
});
Route::get('/Barang', function () {
    return view('Dasar.isi_ruang');
});
Route::get('/user_info', function () {
    return view('venta.user_info');
});
Route::get('/Tambah_ruang', function () {
    return view('venta.tambah_ruangan');
});
