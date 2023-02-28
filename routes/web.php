<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//1.ROUTE BAWAAN LARAVEL
Route::get('/', function () {
    return view('welcome');
});

//2.MEMBUAT ROUTE
Route::get('/hello', function () {
    return'HELLO WORLD';
});

Route::get('/belajar', function () {
    echo'<h1>FADHIL AKRAM</h1>';
    echo'<p>SEDANG BELAJAR</p>';
});

Route::get('/mahasiswa/profile/coba', function () {
    echo'<h2 style="text-align: center"><u>welcome profil coba</u></h2>';
});

//3.ROUTE PARAMETER
Route::get('/mahasiswa/{nama}', function ($nama) {
    return"Tampilkan data mahasiswa bernama $nama";
});

//4.ROUTE PARAMETER DENGAN 2 PARAMETER
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return"cek sisa stok untuk $jenis $merek";
});
Route::get('/stok_barang/{jenis}/{merek}', function ($a,$b) {
    return"cek sisa stok untuk $a $b";
});


//5.ROUTE DENGAN OPTIONAL PARAMETER
Route::get('/stok_barang/{jenis?}/{merek?}',
    function($a='smartphone',$b='samsung'){
    return "Cek sisa stok untuk $a $b";
});

//6.ROUTE PARAMETER DENGAN REGULAR EXPRESSION
Route::get('/user/{id}',function($id){
    return "Tampilkan user dengan $id";
});

// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan id =  $id";
// })->where('id','[0-9]+');

// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan id = $id";
// })->where('id','[A-Z]{2}[0-9]+');

//7.ROUTE REDIRECT
Route::get('/hubungi-kami',function(){
    return '<h1>hubungi kami</h1>';
});
Route::redirect('/contact-us','/hubungi-kami');

//8.ROUTE GROUP
Route::get('/admin/mahasiswa',function(){
    return '<h1>DAFTAR MAHASISWA</h1>';
});Route::get('/admin/dosen',function(){
    return '<h1>DAFTAR DOSEN</h1>';
});
Route::get('/admin/karyawan',function(){
    return '<h1>DAFTAR KARYAWAN</h1>';
});
Route::prefix('/admin')->group(function(){
    Route::get('/admin/mahasiswa',function(){
        return '<h1>DAFTAR MAHASISWA</h1>';
    });Route::get('/admin/dosen',function(){
        return '<h1>DAFTAR DOSEN</h1>';
    });
    Route::get('/admin/karyawan',function(){
        return '<h1>DAFTAR KARYAWAN</h1>';
    });
});

//9.ROUTE FALLBACK
Route::fallback(function(){
    return "maaf,alamat tidak ditemukan";
});

//10.ROUTE PRIORITY
Route::get('/BUKU/1',function(){
    return "BUKU KE-1";
});
Route::get('/BUKU/1',function(){
    return "BUKU SAYA KE-1";
});
Route::get('/BUKU/1',function(){
    return "BUKU KITA KE-1";
});

Route::get('/BUKU/{a}',function($a){
    return "BUKU KE-$a";
});
Route::get('/BUKU/{b}',function($b){
    return "BUKU SAYA KE-$b";
});
Route::get('/BUKU/{c}',function($c){
    return "BUKU KITA KE-$c";
});

Route::get('mahasiswa/andi',function(){
    echo "HALAMAN MAHASISWA ANDI";
});

Route::get('/home',function(){
    return view('halaman_home');
});

Route::get('/mahasiswa',function(){
    return View::make('mahasiswa');
});

Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa');
});

Route::get('/mahasiswa',function(){
    return view('kampus/mahasiswa');
});






















