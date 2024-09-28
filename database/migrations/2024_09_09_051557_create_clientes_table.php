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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('partida_promotor')->nullable();
            $table->string('sunarp')->nullable();
            $table->string('rep_legal')->nullable();
            $table->string('dni_rep_legal')->nullable();
            $table->string('aspoder_legal')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('direccion')->nullable();
            $table->string('departamento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->json('poderes')->nullable(); // Para almacenar los poderes seleccionados
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
