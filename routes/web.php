<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminColtroller;
use App\Http\Controllers\BarangController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [AdminColtroller::class, 'index'])->name('dashboard');
Route::get('/charts', [AdminColtroller::class, 'gotoCharts'])->name('charts');
Route::get('/barang', [AdminColtroller::class, 'gotoBarang'])->name('barang');
Route::get('/transaksi', [AdminColtroller::class, 'gotoTransaksi'])->name('transaction');
Route::get('/user', [AdminColtroller::class, 'gotoUser'])->name('user');

//CRUD Barang
Route::post('/add-barang', [BarangController::class, 'store'])->name('add-barang');
Route::put('/update-barang/{id}', [BarangController::class, 'update'])->name('update-barang');
Route::delete('/delete-barang/{id}', [BarangController::class, 'destroy'])->name('delete-barang');
