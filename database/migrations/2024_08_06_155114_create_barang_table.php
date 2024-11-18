<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->unsignedBigInteger('id_barang')->primary();
            $table->string('gambar', 255)->nullable();
            $table->string('nama_barang', 255)->nullable();
            $table->string('deskripsi', 255)->nullable();
            $table->integer('stok_barang')->nullable();
            $table->string('harga', 50)->nullable();
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->timestamps();
            $table->foreign('id_kategori', 'fk_barang_id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropForeign('fk_barang_id_kategori');
        });
        Schema::dropIfExists('barang');
    }
}
