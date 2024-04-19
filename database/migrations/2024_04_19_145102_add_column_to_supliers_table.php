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
        Schema::table('supliers', function (Blueprint $table) {
            $table->dropColumn(['suplier_name', 'suplier_address']);
            $table->unsignedBigInteger('id_user')->nullable();
            $table->date('tgl_beli')->nullable();
            $table->enum('keterangan', ['Lunas', 'Belum Lunas'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('supliers', function (Blueprint $table) {
            $table->dropColumn(['id_user', 'tgl_beli', 'keterangan']);
            $table->string('suplier_name', 255);
            $table->string('suplier_address', 255);
        });
    }
};
