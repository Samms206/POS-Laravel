<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;

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
        $barangs = Barang::all();
        return view('layout.barang')->with('barangs', $barangs);
    }
    public function gotoTransaksi(){
        return view('layout.transaksi');
    }
    public function gotoUser(){
        $users = User::all();
        return view('layout.user')->with('users', $users);
    }
}
