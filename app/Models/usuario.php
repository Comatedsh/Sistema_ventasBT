<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['nombreUsuario','nombreCompleto','telefono','idRol','correo','clave'];
}