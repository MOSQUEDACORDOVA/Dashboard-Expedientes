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
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('partida')->nullable();
            $table->string('antecedente')->nullable();
            $table->string('direccion')->nullable();
            $table->string('departamento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('sunarp')->nullable();
            $table->string('area_registral')->nullable();
            $table->string('asiento_area_registral')->nullable();
            $table->string('municipal')->nullable();
            $table->string('tasacion')->nullable();
            $table->json('cargas')->nullable(); // Guardar como JSON
            $table->json('gravamenes')->nullable(); // Guardar como JSON
            $table->json('tpendientes')->nullable(); // Guardar como JSON
            $table->string('valor_comercial')->nullable();
            $table->string('tasador')->nullable();
            $table->string('repev')->nullable();
            $table->string('gravamen')->nullable();
            $table->string('instr_notaria')->nullable();
            $table->string('dato_propietario')->nullable();
            $table->string('dni_propietario')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('nombre_conyuge')->nullable();
            $table->string('dni_conyuge')->nullable();
            $table->string('direccion_propietario')->nullable();
            $table->string('departamento_propietario')->nullable();
            $table->string('provincia_propietario')->nullable();
            $table->string('distrito_propietario')->nullable();
            $table->string('titulo_propiedad')->nullable();
            $table->decimal('valor_adquisicion', 10, 2)->nullable();
            $table->date('fecha_adquisicion')->nullable();
            $table->string('notario')->nullable();
            $table->string('asiento_inscripcion')->nullable();
            $table->string('cri')->nullable();
            $table->string('traze_id'); // Foreign key to expediente
            $table->timestamps();

            $table->foreign('traze_id')->references('traze_id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
