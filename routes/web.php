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
    return view('Dashboard');
});
Route::get('/Lab', function () {
    return view('Ruang_Lab');
});
Route::get('/Kelas', function () {
    return view('Ruang_Kelas');
});
Route::get('/tes', function () {
    return view('Dasar.isi_ruang');
});
