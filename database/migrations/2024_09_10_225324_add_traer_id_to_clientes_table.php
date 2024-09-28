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
        Schema::table('clientes', function (Blueprint $table) {
            $table -> string('traze_id')->nullable();
            $table->foreign('traze_id')->references('traze_id')->on('expedientes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            Schema::table('clientes', function (Blueprint $table) {
                // Eliminar la clave foránea y la columna traze_id
                $table->dropForeign(['traze_id']);
                $table->dropColumn('traze_id');
            });
        });
    }
};
