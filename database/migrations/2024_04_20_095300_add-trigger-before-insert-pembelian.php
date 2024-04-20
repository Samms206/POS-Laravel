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
            CREATE TRIGGER before_insert_pembelian
            BEFORE INSERT ON detail_supliers
            FOR EACH ROW
            BEGIN
                DECLARE stok_awal INT;
                SELECT stok INTO stok_awal FROM barangs WHERE id = NEW.id_barang;
                SET NEW.stok_sebelum = stok_awal;
                SET NEW.stok_sesudah = stok_awal + NEW.tambah_stok;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_pembelian');
    }
};
