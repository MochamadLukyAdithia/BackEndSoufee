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
            $table->id();
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_gudang');
            $table->unsignedBigInteger('id_staff');
            // $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_kualitas_kopi');
            $table->unsignedBigInteger('id_pembayaran');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_gudang')->references('id')->on('gudangs');
            $table->foreign('id_staff')->references('id')->on('staff');
            // $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_kualitas_kopi')->references('id')->on('kualitas_kopis');
            $table->foreign('id_pembayaran')->references('id')->on('pembayarans');
            $table->foreign('id_jadwal')->references('id')->on('jadwals');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();         
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
