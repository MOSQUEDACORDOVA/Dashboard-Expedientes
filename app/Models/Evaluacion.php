<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluacion';
     // Definir los campos que se pueden asignar masivamente
     protected $fillable = [
        'respecto_inmueble',
        'respecto_cliente_opera',
        'respecto_minu_compr_v',
        'respecto_minu_compr_v_futu',
        'respecto_fiador',
        'documentos_re',
        'traze_id',
    ];

     // Definir la relación con el modelo Expediente
     public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'traze_id', 'traze_id');
    }
}
