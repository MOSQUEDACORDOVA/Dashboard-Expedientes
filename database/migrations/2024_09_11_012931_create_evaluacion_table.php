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
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->string('respecto_inmueble')->nullable();
            $table->string('respecto_cliente_opera')->nullable();
            $table->string('respecto_minu_compr_v')->nullable();
            $table->string('respecto_minu_compr_v_futu')->nullable();
            $table->string('respecto_fiador')->nullable();
            $table->json('documentos_re')->nullable(); // Guardar los documentos en formato JSON
            $table->string('traze_id'); // Llave foránea a expedientes

            // Establecemos la relación con la tabla Expedientes
            $table->foreign('traze_id')->references('traze_id')->on('expedientes')->onDelete('cascade');

            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion');
    }
};
