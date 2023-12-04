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
        Schema::create('kesenian', function (Blueprint $table) {
           // $table->id();
           $table->char('idkesenian', 10);
           $table->string('nama');
           $table->string('alamat');
           $table->string('catatan');
           $table->integer('notelp');
           $table->integer('harga');
           $table->string('email');
           $table->primary('idkesenian');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesenian');
    }
};
