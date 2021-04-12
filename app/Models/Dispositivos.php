<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    use HasFactory;

    protected $table = "dispositivos";

    protected $primaryKey = 'id';


    
    protected $fillable = [
        'id',
        'estado',
        'nombre_dispositivo',
        'version',
        'nombre_bd',
        'id_cliente',
        
    ];

    public function cliente() {
        return $this->hasMany(Cliente::class);
    }
    
}
