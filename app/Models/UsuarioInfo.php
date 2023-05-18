<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone', 
        'direccion',
        'suscripcion'
    
    ];
}
