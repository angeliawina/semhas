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
        Schema::create('banksampahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kecamatans_id');
            $table->foreign('kecamatans_id')->references('id')->on('kecamatans')->onDelete('cascade');
            $table->string('nama');
            $table->string('alamat');
            $table->string('foto');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banksampah');
    }
};
