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
        Schema::create('total', function (Blueprint $table) {
            $table->id('id_total');
            $table->decimal('pendapatan', 15, 2);
            $table->integer('total_motor');
            $table->integer('total_mobil');
            $table->unsignedBigInteger('id_transaksi');
            $table->unsignedBigInteger('id_layanan');
            $table->timestamps();

            // Definisikan foreign key secara eksplisit
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');
            $table->foreign('id_layanan')->references('id_layanan')->on('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total');
    }
};
