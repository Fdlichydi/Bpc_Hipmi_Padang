<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\SektorController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\UserController;

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


Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'aksilogin'])->name('login');
Route::get('logout', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group(function () {

Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('input-kategori', [KategoriController::class, 'input'])->name('input-kategori');
Route::post('edit-kategori/{id_kategori}', [KategoriController::class, 'edit'])->name('edit-kategori/{id_kategori}');
Route::get('hapus-kategori/{id_kategori}', [KategoriController::class, 'hapus'])->name('hapus-kategori/{id_kategori');

    Route::get('agenda', [AgendaController::class, 'index'])->name('agenda');
    Route::post('input-agenda', [AgendaController::class, 'input'])->name('input-agenda');
    Route::post('edit-agenda/{id_agenda}', [AgendaController::class, 'edit'])->name('edit-agenda/{id_agenda}');
    Route::get('hapus-agenda/{id_agenda}', [AgendaController::class, 'hapus'])->name('hapus-agenda/{id_agenda');

Route::get('sektor', [SektorController::class, 'index'])->name('sektor');
Route::post('input-sektor', [SektorController::class, 'input'])->name('input-sektor');
Route::post('edit-sektor/{id_sektor}', [SektorController::class, 'edit'])->name('edit-sektor/{id_sektor}');
Route::get('hapus-sektor/{id_sektor}', [SektorController::class, 'hapus'])->name('hapus-sektor/{id_sektor}');

Route::get('jabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::post('input-jabatan', [JabatanController::class, 'input'])->name('input-jabatan');
Route::post('edit-jabatan/{id_jabatan}', [JabatanController::class, 'edit'])->name('edit-jabatan/{id_jabatan}');
Route::get('hapus-jabatan/{id_jabatan}', [JabatanController::class, 'hapus'])->name('hapus-jabatan/{id_jabatan');



Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::post('input-berita', [BeritaController::class, 'input'])->name('input-berita');
Route::post('edit-berita/{id_berita}', [BeritaController::class, 'edit'])->name('edit-berita/{id_berita}');
Route::get('hapus-berita/{id_berita}', [BeritaController::class, 'hapus'])->name('hapus-berita/{id_berita}');
Route::get('ubah-berita/{id_berita}', [BeritaController::class, 'ubah'])->name('ubah-berita/{id_berita}');
Route::get('lihat1-berita/{id_berita}', [BeritaController::class, 'lihat'])->name('lihat1-berita/{id_berita}');


Route::get('usaha', [UsahaController::class, 'index'])->name('usaha');
Route::post('input-usaha', [UsahaController::class, 'input'])->name('input-usaha');
Route::post('edit-usaha/{id_usaha}', [UsahaController::class, 'edit'])->name('edit-usaha/{id_usaha}');
Route::get('hapus-usaha/{id_usaha}', [UsahaController::class, 'hapus'])->name('hapus-usaha/{id_usaha}');



Route::get('pengurus', [PengurusController::class, 'index'])->name('pengurus');
Route::post('input-pengurus', [PengurusController::class, 'input'])->name('input-pengurus');
Route::post('edit-pengurus/{id_pengurus}', [PengurusController::class, 'edit'])->name('edit-pengurus/{id_pengurus}');
Route::get('hapus-pengurus/{id_pengurus}', [PengurusController::class, 'hapus'])->name('hapus-pengurus/{id_pengurus}');

Route::get('user', [UserController::class, 'index'])->name('user');
Route::post('input-user', [UserController::class, 'input'])->name('input-user');
Route::post('edit-user/{id_user}', [UserController::class, 'edit'])->name('edit-user/{id_user}');
Route::get('hapus-user/{id_user}', [UserController::class, 'hapus'])->name('hapus-user/{id_user}');

    


});
