<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicarServicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'servicio', 
        'usuario',
        'fecha'

    
    ];
}
