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
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('tbkesenian_id');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
            $table->foreign('tbkesenian_id')->references('id')->on('tbkesenians');
            // $table->string('namakesenian');
            $table->string('keterangan');
            // $table->integer('harga');
            $table->integer('total');
            // $table->string('alamat');
            $table->date('tanggalmulai');
            $table->date('tanggalselesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaans');
    }
};
