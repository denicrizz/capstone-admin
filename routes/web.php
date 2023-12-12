<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KesenianController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TbkesenianController;
// use App\Http\Livewire\Admin\Pelanggan\Pelanggan;
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

Route::get('/', [HomeController::class, 'index']);

// Kesenian
Route::get('kesenian/', [TbkesenianController::class, 'index']);
Route::resource('kesenian', TbkesenianController::class);

// Pelanggan Route::get('/product', \App\Http\Livewire\Admin\Product\Index::class)->name('product.index');
// Route::get('/pelanggan', \App\Livewire\Admin\Pelanggan\Index::class)->name('pelanggan');

Route::resource('pelanggan', PelangganController::class);
