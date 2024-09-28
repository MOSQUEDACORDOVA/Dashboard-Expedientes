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
        Schema::create('facturacion', function (Blueprint $table) {
            $table->id(); // ID de la tabla Facturacion
            // Columna traze_id para relacionar con Expediente
            $table->string('monto');
            $table->date('fecha_factura');
            $table->string('estado')->nullable(); // Ejemplo de otras columnas de Facturación
            $table->timestamps();
            $table->string('traze_id');
            
            // Definir la relación con la tabla expediente
            $table->foreign('traze_id')->references('traze_id')->on('expedientes')->onDelete('cascade');
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacion');
    }
};
