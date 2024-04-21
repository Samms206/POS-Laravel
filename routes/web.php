<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminColtroller;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [AdminColtroller::class, 'index'])->name('dashboard');
Route::get('/charts', [AdminColtroller::class, 'gotoCharts'])->name('charts');
Route::get('/barang', [AdminColtroller::class, 'gotoBarang'])->name('barang');
Route::get('/transaksi', [AdminColtroller::class, 'gotoTransaksi'])->name('transaction');
Route::get('/user', [AdminColtroller::class, 'gotoUser'])->name('user');

//CRUD Barang
Route::get('/get-product-name/{id}', [BarangController::class, 'show'])->name('get-product-name');
Route::post('/add-barang', [BarangController::class, 'store'])->name('add-barang');
Route::put('/update-barang/{id}', [BarangController::class, 'update'])->name('update-barang');
Route::delete('/delete-barang/{id}', [BarangController::class, 'destroy'])->name('delete-barang');

//CRUD User
Route::post('/add-user', [UserController::class, 'store'])->name('add-user');
Route::put('/update-user/{id}', [UserController::class, 'update'])->name('update-user');
Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user');

//Transaction
Route::get('/add-to-cart/{id}', [TransactionController::class, 'addToCart'])->name('add-to-chart');
Route::post('/save-transaction', [TransactionController::class, 'store'])->name('save-transaction');

