<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\NewPageController;
use App\Http\Controllers\CheckoutController;
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
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// Halaman cart
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('cart');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

//halaman kolaborasi
Route::get('/kolaborasi', [KolaborasiController::class, 'index'])->name('kolaborasi');
//halaman hubungi
Route::get('/hubungii', [HubungiController::class, 'index'])->name('hubungi');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::post('/transactions', [TransactionController::class, 'store']);
Route::post('/api/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/transactions/{id}/receipt', [TransactionController::class, 'receipt']);
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
