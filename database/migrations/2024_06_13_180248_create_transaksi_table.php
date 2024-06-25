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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->date('tanggal');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_layanan');
            $table->string('nopol');
            $table->string('jns_kendaraan');
            $table->string('name');
            $table->string('shift');
            $table->integer('harga'); 
            $table->integer('qty'); 
            $table->integer('biaya'); 
            $table->timestamps();

            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_layanan')->references('id_layanan')->on('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
