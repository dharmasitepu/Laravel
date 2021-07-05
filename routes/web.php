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

//Halaman utama
Route::get('/beranda', function () {
    return view('v_beranda');
});

//Halaman Admin-LTE (E-learning)
Route::get('/elearning', function () {
    return view('elearning.v_elearning');
});

//Menu Halaman HTML Lama
Route::view('/', 'v_home');
Route::view('/elearnings', 'v_elearnold');
//Menu Halaman spesifik Utama
Route::view('/task', 'v_task');
Route::view('/prestasis', 'v_prestasis');
Route::view('/vismis', 'v_vismis');
Route::view('/profils', 'v_profils');
Route::view('/cert', 'v_cert');


//Menu Halaman Tentang
Route::view('/kegiatan', 'tentang.v_kegiatan');
Route::view('/prestasi', 'tentang.v_prestasi');
Route::view('/profil', 'tentang.v_profil');
Route::view('/vimisi', 'tentang.v_vimisi');
Route::view('/sertifikat', 'tentang.v_sertifikat');

//Menu Halaman Utama
Route::view('/beranda', 'v_beranda');
Route::view('/blog', 'v_blog');
Route::view('/kontak', 'v_kontak');


/*
Route::get('/siswa', function ($nama_siswa = 'Dharma') {
    return view('siswa', ['nama_siswa' => $nama_siswa]);
});
*/