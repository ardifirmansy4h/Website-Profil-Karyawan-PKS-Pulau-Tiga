<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawanController;

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

// Route::get('/', karyaController::class);
// // Route::get('/data', function () {
// //     return view('layouts.karyawan.all');
// // });
// Route::resource('karya', karyaController::class);
Route::get('/', [karyawanController::class, 'index']);
Route::get('/tambah', [karyawanController::class, 'create']);
Route::post('/post', [karyawanController::class, 'store']);
Route::get('/edit/{id}', [karyawanController::class, 'edit']);
Route::get('/detail/{id}', [karyawanController::class, 'show']);
Route::post('/update/{id}', [karyawanController::class, 'update']);
Route::get('/pdf_pelatihan/{filename}', [karyawanController::class, 'pelatihan']);
Route::get('/penghargaan/{id}', [karyawanController::class, 'penghargaan']);
Route::get('/peringatan/{id}', [karyawanController::class, 'peringatan']);
Route::get('/delete/{id}', [karyawanController::class, 'destroy']);

