<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function show($id){
        $productName = Barang::where('id', $id)->value('nama_brg');

        return response()->json(['productName' => $productName]);
    }

    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect('/barang')->with('success', 'Data barang berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        // Perbarui data barang dengan data yang dikirimkan oleh formulir
        $barang->update([
            'nama_brg' => $request->edit_nama_brg,
            'stok' => $request->edit_stok,
            'hrg_jual' => $request->edit_hrg_jual,
            'hrg_beli' => $request->edit_hrg_beli,
        ]);

        // Redirect ke halaman yang sesuai setelah perubahan berhasil
        return redirect('/barang')->with('success', 'Data barang berhasil diperbarui.');
    }
    public function destroy($id){
        $barangs = Barang::find($id);
        $barangs->delete();
        return redirect('/barang')->with('warning', 'Data barang telah dihapus.');
    }
}
