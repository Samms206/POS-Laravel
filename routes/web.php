<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminColtroller;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [AdminColtroller::class, 'index'])->name('dashboard');
Route::get('/charts', [AdminColtroller::class, 'gotoCharts'])->name('charts');
Route::get('/barang', [AdminColtroller::class, 'gotoBarang'])->name('barang');