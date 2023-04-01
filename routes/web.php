<?php

use Illuminate\Support\facades\Route;

Route::get('/',[App\Http\Controllers\Admin\pagecontroller::class,'index']);
Route::get('/mahasiswa',[App\Http\Controllers\Admin\pagecontroller::class,'tampil']);
Route::get('/coba-facade',[App\Http\Controllers\Admin\pagecontroller::class,'cobafacade']);
Route::get('/coba-class',[App\Http\Controllers\Admin\pagecontroller::class,'cobaclass']);

