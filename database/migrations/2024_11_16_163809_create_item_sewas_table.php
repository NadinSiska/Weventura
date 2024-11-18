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
        Schema::create('item_sewa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sewa');
            $table->unsignedBigInteger('id_barang');            
            $table->integer('quantity')->unsigned();
            $table->string('harga_perhari', 50);
            $table->string('total_harga', 50);
            $table->timestamps();
            $table->foreign('id_sewa', 'fk_item_sewa_id_sewa')->references('id_sewa')->on('penyewaan')->onDelete('cascade');
            $table->foreign('id_barang', 'fk_item_sewa_id_barang')->references('id_barang')->on('barang')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('item_sewa', function (Blueprint $table) {
            $table->dropForeign('fk_item_sewa_id_sewa');
            $table->dropForeign('fk_item_sewa_id_barang');
        });
        Schema::dropIfExists('item_sewa');
    }
};
