<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediciones extends Model
{
    use HasFactory;

    protected $table = 'mediciones';

    protected $primaryKey = 'id';

    
    protected $fillable = [
        'id',
        'estado',
        'nombre_medicion',
        'valor_ingenieria',
        'divisor',
        'nombre_activacion_bd',
        'id_dispositivo',
        'tipo_grafico',
        'tipo_dato',
        'orden',
        'nombre_dato_bd'
        
    ];

}
