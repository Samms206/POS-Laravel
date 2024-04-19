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
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('customer')->nullable()->after('id');
            $table->unsignedBigInteger('id_staff')->nullable()->after('customer');

            $table->foreign('id_staff')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['id_staff']);
            $table->dropColumn('id_staff');
            $table->dropColumn('customer');
        });
    }
};
