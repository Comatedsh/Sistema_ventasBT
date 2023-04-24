<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class producto extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = true;
    protected $fillable = [
        
        'nombre_producto',
        'identificador',
        'descripcion_producto',
        'precio',
        'existentes',
        'imagen',
        'estado_producto',
        'id_marca',
    ];
}
