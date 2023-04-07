<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

// Route::post('detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/sinopsis',[AdminController::class,'show_sinopsis']);
Route::get('/admin/mc',[AdminController::class,'show_mc']);
Route::get('/admin/alur',[AdminController::class,'alur']);
Route::get('/admin/author',[AdminController::class,'author']);
Route::get('/admin/info',[AdminController::class,'info']);