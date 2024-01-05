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
        Schema::create('cabangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_manajer')->unsigned();
            $table->foreign('id_manajer')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_cabang', 255);
            $table->text('alamat');
            $table->bigInteger('id_supervisor')->unsigned();
            $table->foreign('id_supervisor')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_kasir')->unsigned();
            $table->foreign('id_kasir')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_gudang')->unsigned();
            $table->foreign('id_gudang')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabangs');
    }
};
