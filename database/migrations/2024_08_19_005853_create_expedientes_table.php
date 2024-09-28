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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('razon_social');
            $table->string('ruc')->unique();
            $table->string('nombre_proyecto');
            $table->string('proveedor_legal');
            $table->string('traze_id')->nullable()->index(); // Añadido índice
            $table->string('finalidad');
            $table->string('funcionario');
            $table->string('correo_funcionario')->unique();
            $table->string('asistente')->nullable();
            $table->string('correo_asistente')->nullable()->unique();
            $table->string('actividad_actual');
            $table->string('traze_vinculado');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
