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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sewa'); // Menambahkan kolom id_sewa
            $table->unsignedBigInteger('id_barang'); // Menambahkan kolom id_barang
            $table->integer('quantity')->default(1); // Jumlah barang yang dipesan
            $table->timestamps();

            // Menambahkan foreign key untuk id_sewa
            $table->foreign('id_sewa')->references('id_sewa')->on('penyewaan')->onDelete('cascade');
            // Menambahkan foreign key untuk id_barang
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    } 
};
