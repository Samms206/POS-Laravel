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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transaction');
            $table->unsignedBigInteger('id_barang');
            $table->integer('qty');
            $table->integer('stok_sebelum');
            $table->integer('stok_sesudah');
            $table->timestamps();

            $table->foreign('id_transaction')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transactions');
    }
};
