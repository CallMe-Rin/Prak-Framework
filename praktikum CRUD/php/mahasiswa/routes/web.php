<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaPostController;

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

Route::get('/mahasiswa', [MahasiswaPostController::class, 'index'])->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaPostController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::post('/insertdata', [MahasiswaPostController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [MahasiswaPostController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [MahasiswaPostController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [MahasiswaPostController::class, 'delete'])->name('delete');