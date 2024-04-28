<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminColtroller;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\UserMiddleware;

Route::get('/login', [Authentication::class, 'index'])->name('login');
Route::post('/login-process', [Authentication::class, 'auth'])->name('login-process');
Route::get('/logout', [Authentication::class, 'logout'])->name('logout');

Route::middleware(UserMiddleware::class)->group(function () {
    Route::middleware(UserMiddleware::class)->get('/', [AdminColtroller::class, 'index'])->name('dashboard');
    Route::middleware(UserMiddleware::class)->get('/charts', [AdminColtroller::class, 'gotoCharts'])->name('charts');
    Route::get('/barang', [AdminColtroller::class, 'gotoBarang'])->name('barang');
    Route::get('/transaksi', [AdminColtroller::class, 'gotoTransaksi'])->name('transaction');
    Route::get('/user', [AdminColtroller::class, 'gotoUser'])->name('user');
    Route::get('/report-transaction', [AdminColtroller::class, 'gotoReportTransaction'])->name('report-transaction');

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
});

