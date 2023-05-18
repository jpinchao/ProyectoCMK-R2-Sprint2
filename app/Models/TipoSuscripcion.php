<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSuscripcion extends Model
{
    use HasFactory;
    protected $primaryKey="id";
   
    protected $table="tipo_suscripciones";
   
    protected $fillable = [
        'nombre', 
        'descripcion',
        'precio'
    
    ];
    public $timestamps=false;

    public function suscripcion(){
        return $this->hasMany('App\Models\Suscripcion');

    }
}
