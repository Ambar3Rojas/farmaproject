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
        Schema::create('receta_medicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->time('fecha');
            $table->string('paciente');
            $table->unsignedBigInteger('id_doctor');
            $table->foreignId('id_doctor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_medicas');
    }
};