<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'nama_brg','stok','hrg_jual','hrg_beli'
    ];

    //relationship
    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class, 'id_barang', 'id');
    }

    public function detailSupliers()
    {
        return $this->hasMany(DetailSuplier::class, 'id_barang', 'id');
    }
}
