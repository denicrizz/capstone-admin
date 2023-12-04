<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KesenianController;
use App\Http\Livewire\Admin\pelanggan\Pelanggan;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routing Route::get('/client', \App\Http\Livewire\Admin\Client\Index::class)->name('client.index');
Route::get('admin/home', [HomeController::class, 'index']);

Route::get('kesenian/', [KesenianController::class, 'index']);
Route::get('kesenian/create', [KesenianController::class, 'store']);

//Route::get('/product', \App\Http\Livewire\Admin\Product\Index::class)->name('product.index');
Route::get('/pelanggan', \App\Http\Livewire\Admin\Pelanggan\Index::class)->name('pelanggan.index');
// Route::resource('kesenian', KesenianController::class);

// Route::get('/', function () {
//     return view('kesenian/index');
// });
