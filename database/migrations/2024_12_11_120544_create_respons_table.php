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
        Schema::create('respons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('permintaan_id');
            // $table->foreign('permintaan_id')->references('id')->on('permintaans');
            $table->unsignedBigInteger('staff_id');
            // $table->foreign('staff_id')->references('id')->on('staff');
            $table->unsignedBigInteger('status_id');
            // $table->foreign('status_id')->references('id')->on('status_penjemputans');
            $table->unsignedBigInteger('jadwal_id');
            // $table->foreign('jadwal_id')->references('id')->on('jadwals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respons');
    }
};
