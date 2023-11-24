<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/daftar', [MahasiswaController::class, 'index']);
Route::get('/pilihanBeasiswa', [MahasiswaController::class, 'pilihanBeasiswa']);
Route::get('/hasil', [MahasiswaController::class, 'hasil']);
Route::post('/get-ipk', [MahasiswaController::class, 'getIpk'])->name('get.ipk');
Route::post('/submit', [MahasiswaController::class, 'submit'])->name('submit.form');
