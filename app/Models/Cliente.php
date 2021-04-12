<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'id';

    
    protected $fillable = [
        'id',
        'nombre_cliente',
        'estado'
    ];

    public function dispositivo() {
        return $this->belongsTo(Dispositivos::class);
    }
    
}
