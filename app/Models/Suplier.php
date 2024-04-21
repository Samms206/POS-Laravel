<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_suplier',
        'tgl_beli',
        'keterangan'
    ];

    public function detailSupliers()
    {
        return $this->hasMany(DetailSuplier::class, 'id_suplier', 'id');
    }
}
