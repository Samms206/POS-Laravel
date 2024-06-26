<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class return_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_detail_transaction',
        'tgl_ret',
        'keterangan_ret',
    ];

    public function detailTransaction()
    {
        return $this->belongsTo(DetailTransaction::class, 'id_detail_transaction', 'id');
    }
}
