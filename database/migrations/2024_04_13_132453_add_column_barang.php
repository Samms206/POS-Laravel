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
        Schema::table('barangs', function (Blueprint $table) {
            $table->string('nama_brg', 255)->after('id')->nullable();
            $table->integer('stok')->after('nama_brg')->nullable();
            $table->integer('hrg_jual')->after('stok')->nullable();
            $table->integer('hrg_beli')->after('hrg_jual')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropColumn('nama_brg');
            $table->dropColumn('stok');
            $table->dropColumn('hrg_jual');
            $table->dropColumn('hrg_beli');
        });
    }
};
