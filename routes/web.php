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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login.index');
});

// Tampilan User Dosen
Route::get('/user', function () {
    return view('userDosen.dashboard');
});

Route::get('/pengajuan-judul', function () {
    return view('userDosen.pengajuan_judul');
});


Route::get('/pengajuan-proposal', function () {
    return view('userDosen.pengajuan_proposal');
});

Route::get('/pkm', function () {
    return view('userDosen.pkm');
});
Route::get('/detail-pkm', function () {
    return view('userDosen.detail_pkm');
});

Route::get('/publikasi', function () {
    return view('userDosen.publikasi');
});

Route::get('/add-publikasi', function () {
    return view('userDosen.addpublikasi');
});

Route::get('/jadwal-sempro', function () {
    return view('userDosen.jadwal_sempro');
});

Route::get('/jadwal-semhas', function () {
    return view('userDosen.jadwal_semhas');
});




// Tampilan User Admin
Route::get('/admin', function () {
    return view('home');
});
