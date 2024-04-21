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
        Schema::create('detail_supliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_suplier');
            $table->unsignedBigInteger('id_barang');
            $table->integer('tambah_stok');
            $table->decimal('hrg_beli', 10, 2);
            $table->integer('stok_sebelum')->nullable();
            $table->integer('stok_sesudah')->nullable();
            $table->timestamps();

            $table->foreign('id_suplier')->references('id')->on('supliers')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_supliers');
    }
};
