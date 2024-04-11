<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminColtroller;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [AdminColtroller::class, 'index']);