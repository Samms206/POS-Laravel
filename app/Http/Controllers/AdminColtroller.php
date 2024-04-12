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
    public function gotoCharts()
    {
        return view('layout.chart');
    }
    public function gotoBarang(){
        return view('layout.barang');
    }
    public function gotoTransaksi(){
        return view('layout.transaksi');
    }
}
