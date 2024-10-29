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
        Schema::create('penyakitdiagnosa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_gejala')->notNull()->references('id')->on('gejala')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_penyakit')->notNull()->references('id')->on('penyakit')->onUpdate('cascade')->onDelete('cascade');
            $table->string('bobot_nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakitdiagnosa');
    }
};
