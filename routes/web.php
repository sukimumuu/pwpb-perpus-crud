<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/siswa', [PageController::class, 'siswa'])->name('siswa');
Route::get('/siswa-create', [SiswaController::class, 'create'])->name('create-siswa');
Route::get('/siswa-edit/{id}', [SiswaController::class, 'edit'])->name('edit-siswa');
Route::post('/siswa-update/{id}', [SiswaController::class, 'update'])->name('update-siswa');
Route::get('/siswa-delete/{id}', [SiswaController::class, 'delete'])->name('delete-siswa');

Route::post('/siswa-store', [SiswaController::class, 'store'])->name('store-siswa');

Route::get('/jurusan', [PageController::class, 'jurusan'])->name('jurusan');
Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('create-jurusan');
Route::post('/jurusan-store', [JurusanController::class, 'store'])->name('store-jurusan');
Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('edit-jurusan');
Route::post('/jurusan-update/{id}', [JurusanController::class, 'update'])->name('update-jurusan');
Route::get('/jurusan-delete/{id}', [JurusanController::class, 'destroy'])->name('delete-jurusan');

