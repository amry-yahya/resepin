<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\KomentarController;

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


Route::get('/',[ResepController::class, 'index']);
Route::get('/about', [ResepController::class, 'about']);
Route::get('/landing',[ResepController::class, 'index']);
Route::get('/landing/cari',[ResepController::class, 'cari']);
Route::get('/kategori/{tag}',[ResepController::class, 'kategori']);
Route::get('/explore', [ResepController::class, 'explore']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('landing');
    })->name('dashboard');
    Route::get('/join', [ResepController::class, 'join']);
    Route::get('/about', [ResepController::class, 'about']);
    Route::get('/resep_saya', [ResepController::class, 'resep_saya']);
    Route::get('/resep/tambah', [ResepController::class, 'tambah']);
    Route::post('/resep/store', [ResepController::class, 'store']);
    Route::post('/komentar/store', [KomentarController::class, 'store']);
    Route::get('/resep/view/{id}', [ResepController::class, 'view']);
    Route::get('/resep/edit/{id}', [ResepController::class, 'edit']);
    Route::put('/resep/update/{id}', [ResepController::class, 'update']);
    Route::get('/resep/hapus/{id}', [ResepController::class, 'delete']);
    Route::get('/upload/{id}', [UploadController::class, 'upload']);
    Route::post('/upload/proses', [UploadController::class, 'proses_upload']);
});