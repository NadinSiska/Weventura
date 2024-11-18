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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sewa')->primary();
            $table->string('invoice', 250);
            $table->string('nama_penyewa', 250);
            $table->date('tanggal_sewa');
            $table->string('durasi_sewa', 250);
            $table->date('tanggal_kembali');
            $table->string('total_biaya', 250);
            $table->string('foto_identitas', 300);
            $table->tinyInteger('status')->default(0)->comment('0: pending, 1: approved, 2: rented, 3: returned, 4: reject');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaan');
    }
};
