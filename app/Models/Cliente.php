<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
   // Especificar la tabla si el nombre del modelo no sigue la convención
   protected $table = 'clientes';

   // Definir las columnas que se pueden asignar en masa
   protected $fillable = [
       'partida_promotor',
       'sunarp',
       'rep_legal',
       'dni_rep_legal',
       'aspoder_legal',
       'correo_electronico',
       'direccion',
       'departamento',
       'provincia',
       'distrito',
       'poderes',
       'traze_id'
   ];
   public function expediente()
   {
       return $this->belongsTo(Expediente::class, 'traze_id', 'traze_id');
   }
}
