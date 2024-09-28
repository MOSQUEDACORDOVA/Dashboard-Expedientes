<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'razon_social',
        'ruc',
        'nombre_proyecto',
        'proveedor_legal',
        'traze_id',
        'finalidad',
        'funcionario',
        'correo_funcionario',
        'asistente',
        'correo_asistente',
        'actividad_actual' ,
        'traze_vinculado' 
    ];

    // Relación uno a muchos con Inmueble
    public function inmuebles()
    {
        return $this->hasMany(Inmueble::class, 'traze_id', 'traze_id');
    }

    // Relación uno a uno con Cliente
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'traze_id', 'traze_id');
    }

    // Relación uno a uno con Evaluacion
    public function evaluacion()
    {
        return $this->hasOne(Evaluacion::class, 'traze_id', 'traze_id');
    }
}
