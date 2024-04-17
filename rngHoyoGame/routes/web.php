<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelicController;

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
    return view('index');
})->name('home');

// Route::get('/', [App\Http\Controllers\RelicController::class, 'index'])->name('home');
Route::post('/tambah', [App\Http\Controllers\RelicController::class, 'tambah'])->name('tambah');
Route::post('/cari', [App\Http\Controllers\RelicController::class, 'cari'])->name('cari');
