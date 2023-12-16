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
        Schema::create('detilpenyewaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyewaan_id');
            $table->unsignedBigInteger('tbkesenian_id');
            $table->foreign('penyewaan_id')->references('id')->on('penyewaans');
            $table->foreign('tbkesenian_id')->references('id')->on('tbkesenians');
            // $table->foreignId('penyewaan_id')->constrained('penyewaans');
            // $table->foreignId('tbkesenian_id')->constrained('tbkesenians');
            $table->integer('quantity');
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detilpenyewaans');
    }
};
