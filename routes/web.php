<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KesenianController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenyewaanController;
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

// Pelanggan
Route::resource('pelanggan', PelangganController::class);

//Penyewaan
Route::resource('penyewaan', PenyewaanController::class);

//Login Dan Register
// Route::get('login', function () {
//     return view('login');
// });

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name(('register'));
    Route::post('/register', [AuthController::class, 'registerPost'])->name(('register'));
    Route::get('/login', [AuthController::class, 'login'])->name(('login'));
    Route::post('/login', [AuthController::class, 'loginPost'])->name(('login'));
});

// Route::get('register', function () {
//     return view('register');
// });
