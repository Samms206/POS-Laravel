<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->belongsTo(User::class, 'id_staff', 'id');
    }

    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class, 'id_transaction', 'id');
    }
}
