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
        Schema::table('kustomisasi', function (Blueprint $table) {
            $table->integer('harga')->after('height');
            $table->string('pembayaran')->after('harga')->nullable();
            $table->string('buktitf')->after('pembayaran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kustomisasi', function (Blueprint $table) {
            $table->dropColumn('harga');
            $table->dropColumn('pembayaran');
            $table->dropColumn('buktitf');
        });
    }
};