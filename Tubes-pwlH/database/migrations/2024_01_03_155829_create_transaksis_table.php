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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cabang');
            $table->date('tanggal_transaksi');
            $table->string('jenis_transaksi');
            $table->integer('id_produk')->unsigned();
            $table->integer('jmlh_produk');
            $table->decimal('harga_produk', 10, 2);
            $table->timestamps();
        
            $table->foreign('id_cabang')->references('id_cabang')->on('cabangs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};