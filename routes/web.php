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

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;


Route::get('/', 				[PagesController::class, 'index']);
Route::get('/login', 			[PagesController::class, 'index']);
Route::get('/login/mahasiswa', 	[PagesController::class, 'login_mahasiswa']);
Route::get('/login/petugas', 	[PagesController::class, 'login_petugas']);
Route::get('/login/admin', 		[PagesController::class, 'login_admin']);
Route::get('/home-mahasiswa', 			[PagesController::class, 'home_mahasiswa']);
Route::get('/home-petugas', 			[PagesController::class, 'home_petugas']);
Route::get('/home-admin', 			[PagesController::class, 'home_admin']);
Route::get('/ajukanPeminjaman', [PeminjamanController::class, 'ajukanPeminjaman']);
Route::get('/logout', 			[PagesController::class, 'logout']);

Route::post('/login-mahasiswa', 			[LoginController::class, 'loginMahasiswa']);
Route::post('/login-petugas', 			[LoginController::class, 'loginPetugas']);
Route::post('/login-admin', 			[LoginController::class, 'loginAdmin']);

Route::get('/admin', 				[AdminController::class, 'index']);
Route::get('/admin/create', 		[AdminController::class, 'create']);
Route::get('/admin/edit/{admin}', 	[AdminController::class, 'edit']);
Route::post('/admin', 				[AdminController::class, 'store']);
Route::patch('/admin/{admin}', 		[AdminController::class, 'update']);
Route::delete('/admin/{admin}', 	[AdminController::class, 'destroy']);

Route::get('/mahasiswa-buku', 					[PagesController::class, 'mahasiswa_buku']);
Route::get('/mahasiswa-peminjaman', 					[PagesController::class, 'mahasiswa_peminjaman']);
Route::post('/mahasiswa-peminjaman', 					[PagesController::class, 'store_peminjaman']);
Route::get('/buku', 			[BukuController::class, 'index']);
Route::get('/buku/create', 		[BukuController::class, 'create']);
Route::get('/buku/edit/{buku}', [BukuController::class, 'edit']);
Route::post('/buku', 			[BukuController::class, 'store']);
Route::patch('/buku/{buku}', 	[BukuController::class, 'update']);
Route::delete('/buku/{buku}', 	[BukuController::class, 'destroy']);

Route::get('/kategori', 				[KategoriController::class, 'index']);
Route::get('/kategori/create', 			[KategoriController::class, 'create']);
Route::get('/kategori/edit/{kategori}', [KategoriController::class, 'edit']);
Route::post('/kategori', 				[KategoriController::class, 'store']);
Route::patch('/kategori/{kategori}', 	[KategoriController::class, 'update']);
Route::delete('/kategori/{kategori}', 	[KategoriController::class, 'destroy']);

Route::get('/mahasiswa', 					[MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', 			[MahasiswaController::class, 'create']);
Route::get('/mahasiswa/edit/{mahasiswa}', 	[MahasiswaController::class, 'edit']);
Route::post('/mahasiswa', 					[MahasiswaController::class, 'store']);
Route::patch('/mahasiswa/{mahasiswa}', 		[MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{mahasiswa}',		[MahasiswaController::class, 'destroy']);

Route::get('/petugas', 					[PetugasController::class, 'index']);
Route::get('/petugas/create', 			[PetugasController::class, 'create']);
Route::get('/petugas/edit/{petugas}', 	[PetugasController::class, 'edit']);
Route::post('/petugas', 				[PetugasController::class, 'store']);
Route::patch('/petugas/{petugas}', 		[PetugasController::class, 'update']);
Route::delete('/petugas/{petugas}', 	[PetugasController::class, 'destroy']);

Route::get('/peminjaman', 					[PeminjamanController::class, 'index']);
Route::get('/peminjaman/create', 			[PeminjamanController::class, 'create']);
Route::get('/peminjaman/edit/{peminjaman}', [PeminjamanController::class, 'edit']);
Route::post('/peminjaman', 					[PeminjamanController::class, 'store']);
Route::patch('/peminjaman/{peminjaman}', 	[PeminjamanController::class, 'update']);
Route::delete('/peminjaman/{peminjaman}', 	[PeminjamanController::class, 'destroy']);
