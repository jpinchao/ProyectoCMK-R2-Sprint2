<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    use HasFactory;
    protected $foreignKey="id_TipoSuscripcion";
    protected $foreignKey2="id_user";

    protected $table="Suscripciones";
   
    protected $fillable = [
        'estado', 
        'facha_inicio',
        'id_user',
        'id_TipoSuscripcion',
    ];
    public $timestamps=false;

 
    public function users(){
        return $this->hasMany('App\Models\User');

    }
    public function tiposuscripcion(){
        return $this->belongsTo('App\Models\TipoSuscripcion');

    }
}
