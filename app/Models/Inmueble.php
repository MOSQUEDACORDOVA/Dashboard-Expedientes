<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $fillable = [
        'partida',
        'antecedente',
        'direccion',
        'departamento',
        'provincia',
        'distrito',
        'sunarp',
        'area_registral',
        'asiento_area_registral',
        'municipal',
        'tasacion',
        'cargas',
        'gravamenes',
        'tpendientes',
        'valor_comercial',
        'tasador',
        'repev',
        'gravamen',
        'instr_notaria',
        'dato_propietario',
        'dni_propietario',
        'estado_civil',
        'nombre_conyuge',
        'dni_conyuge',
        'direccion_propietario',
        'departamento_propietario',
        'provincia_propietario',
        'distrito_propietario',
        'titulo_propiedad',
        'valor_adquisicion',
        'fecha_adquisicion',
        'notario',
        'asiento_inscripcion',
        'cri',
        'traze_id'
    ];

    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'traze_id', 'traze_id');
    }
}
