<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function addToCart($id){
        $barang = Barang::findOrFail($id);

        return response()->json([
            'namaProduk' => $barang->nama_brg,
            'harga' => $barang->hrg_jual,
        ]);
    }
}
