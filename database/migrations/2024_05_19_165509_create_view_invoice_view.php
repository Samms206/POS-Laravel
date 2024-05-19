<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            CREATE VIEW v_invoices as
            SELECT b.id as invoice,c.nama_brg as barang, c.hrg_jual as harga, b.qty, b.sub_total, c.created_at as tanggal
            FROM transactions a
            JOIN detail_transactions b ON a.id = b.id_transaction
            JOIN barangs c ON b.id_barang = c.id
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS v_invoices");
    }
};
