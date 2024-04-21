<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSuplier extends Model
{
    use HasFactory;

    public function suplier()
    {
        return $this->belongsTo(Suplier::class, 'id_suplier', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
}
