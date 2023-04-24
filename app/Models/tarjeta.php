<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarjeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUsuario',
        'fecha_caducidad',
        'numero_tarjeta',
        'codigo_seguridad',
    ];
}
