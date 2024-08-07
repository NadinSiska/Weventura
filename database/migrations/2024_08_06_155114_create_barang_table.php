<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('gambar', 255)->nullable();
            $table->string('nama_barang', 255)->nullable();
            $table->decimal('harga', 10, 2)->nullable();
            $table->integer('id_kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('stok_barang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}