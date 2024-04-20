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
            CREATE TRIGGER after_insert_tambah_stok_setelah_pembelian
            AFTER INSERT ON detail_supliers
            FOR EACH ROW
            BEGIN
                DECLARE stok_sekarang INT;
                DECLARE stok_baru INT;
                SELECT stok INTO stok_sekarang FROM barangs WHERE id = NEW.id_barang;
                SET stok_baru = stok_sekarang + NEW.tambah_stok;
                UPDATE barang SET stok = stok_baru WHERE id = NEW.id_barang;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_tambah_stok_setelah_pembelian');
    }
};
