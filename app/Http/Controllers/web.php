<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\SektorController;
use App\Http\Controllers\UsahaController;
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

// Route::get('/', function () {
//     return view('backend');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('ttg', [HomeController::class, 'ttg']);
Route::get('kegiatan', [HomeController::class, 'berita']);
Route::get('anggota', [HomeController::class, 'usaha']);
Route::get('lihat-berita/{slug}', [HomeController::class, 'lihat']);
Route::get('kategori-berita/{nama}', [HomeController::class, 'kategori']);
Route::get('sektor/{nama}', [HomeController::class, 'sektor']);






Route::get('kategori', [KategoriController::class, 'index']);
Route::post('input-kategori', [KategoriController::class, 'input']);
Route::post('edit-kategori/{id_kategori}', [KategoriController::class, 'edit']);
Route::get('hapus-kategori/{id_kategori}', [KategoriController::class, 'hapus']);

Route::get('sektor', [SektorController::class, 'index']);
Route::post('input-sektor', [SektorController::class, 'input']);
Route::post('edit-sektor/{id_sektor}', [SektorController::class, 'edit']);
Route::get('hapus-sektor/{id_sektor}', [SektorController::class, 'hapus']);

Route::get('jabatan', [JabatanController::class, 'index']);
Route::post('input-jabatan', [JabatanController::class, 'input']);
Route::post('edit-jabatan/{id_jabatan}', [JabatanController::class, 'edit']);
Route::get('hapus-jabatan/{id_jabatan}', [JabatanController::class, 'hapus']);

Route::get('berita', [BeritaController::class, 'index']);
Route::post('input-berita', [BeritaController::class, 'input']);
Route::post('edit-berita/{id_berita}', [BeritaController::class, 'edit']);
Route::get('hapus-berita/{id_berita}', [BeritaController::class, 'hapus']);
Route::get('ubah-berita/{id_berita}', [BeritaController::class, 'ubah']);
Route::get('lihat1-berita/{id_berita}', [BeritaController::class, 'lihat']);

Route::get('usaha', [UsahaController::class, 'index']);
Route::post('input-usaha', [UsahaController::class, 'input']);
Route::post('edit-usaha/{id_usaha}', [UsahaController::class, 'edit']);
Route::get('hapus-usaha/{id_usaha}', [UsahaController::class, 'hapus']);

Route::get('pengurus', [PengurusController::class, 'index']);
Route::post('input-pengurus', [PengurusController::class, 'input']);
Route::post('edit-pengurus/{id_pengurus}', [PengurusController::class, 'edit']);
Route::get('hapus-pengurus/{id_pengurus}', [PengurusController::class, 'hapus']);