<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminColtroller extends Controller
{
    //
    public function index()
    {
        return view('layout.dashboard');
    }
}
