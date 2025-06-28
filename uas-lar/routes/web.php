<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\peminjamController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\perpusController;

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
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//PerpusBuku
Route::get('/perpus', [perpusController::class, 'index']);
Route::get('/perpus/tambah', [perpusController::class, 'create']);
Route::post('/perpus', [perpusController::class, 'store']);
Route::get('/perpus/edit/{id}', [perpusController::class, 'edit'])->name('perpus.edit');
Route::put('/perpus/{id}', [perpusController::class, 'update']);
Route::delete('/perpus/{id}', [perpusController::class, 'destroy']);

//Anggota
Route::get('/anggota', [anggotaController::class, 'index']);
Route::get('/anggota/tambah', [anggotaController::class, 'create']);
Route::post('/anggota', [anggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [anggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/anggota/{id}', [anggotaController::class, 'update']);
Route::delete('/anggota/{id}', [anggotaController::class, 'destroy']);

//Peminjam
Route::get('/peminjam', [peminjamController::class, 'index']);
