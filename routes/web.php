<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;

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

Route::get('/resep', [ResepController::class, 'index']);
Route::get('/resep/tambah', [ResepController::class, 'tambah']);
Route::post('/resep/store', [ResepController::class, 'store']);
Route::get('/resep/view/{id}', [ResepController::class, 'view']);
Route::get('/resep/edit/{id}', [ResepController::class, 'edit']);
Route::put('/resep/update/{id}', [ResepController::class, 'update']);
Route::get('/resep/hapus/{id}', [ResepController::class, 'delete']);