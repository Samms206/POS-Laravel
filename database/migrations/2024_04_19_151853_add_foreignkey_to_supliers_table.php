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
            $table->dropColumn('id_user');
            $table->unsignedBigInteger('id_suplier')->nullable()->after('id');

            $table->foreign('id_suplier')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('supliers', function (Blueprint $table) {
            $table->dropForeign(['id_suplier']);
            $table->dropColumn('id_suplier');
        });
    }
};
