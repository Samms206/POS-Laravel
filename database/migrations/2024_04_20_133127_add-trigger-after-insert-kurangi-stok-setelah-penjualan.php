<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER after_insert_kurangi_stok_setelah_penjualan
            AFTER INSERT ON detail_transactions
            FOR EACH ROW
            BEGIN
                UPDATE barangs
                SET stok = stok - NEW.qty
                WHERE id = NEW.id_barang;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_kurangi_stok_setelah_penjualan');
    }
};
