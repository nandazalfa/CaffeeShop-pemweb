<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\NewPageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KolaborasiController;
use App\Http\Controllers\HubungiController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TransactionController;

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

// Halaman utama (home)
Route::get('/', [ProductController::class, 'index']);

// Halaman Karir
Route::get('/karir', [KarirController::class, 'index']);

// halaman product
Route::get('/product', [NewPageController::class, 'index'])->name('newpage.index');

// Halaman cart
Route::get('/transaksi', [TransaksiController::class, 'showTransaksi'])->name('cart');
//halaman kolaborasi
Route::get('/kolaborasi', [KolaborasiController::class, 'index'])->name('kolaborasi');
//halaman hubungi
Route::get('/hubungii', [HubungiController::class, 'index'])->name('hubungi');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');