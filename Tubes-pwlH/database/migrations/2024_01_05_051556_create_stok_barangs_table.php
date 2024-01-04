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
        Schema::create('stok_barangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_cabang')->unsigned();
            $table->foreign('id_cabang')->references('id')->on('cabangs')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->bigInteger('pegawai_gudang')->unsigned();
            $table->foreign('pegawai_gudang')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_barangs');
    }
};
