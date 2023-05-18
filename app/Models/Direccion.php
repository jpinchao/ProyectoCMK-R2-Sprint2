<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    
    protected $table="Direcciones";
    protected $fillable = [
        'numeroDeCalle', 
        'barrio',
        'comuna_sector',
        'ciudad',
        'departamento_provicia',
        'pais'
    
    ];
    public $timestamps=false;
    public function user(){
        return $this->belongsTo('App\Models\User');

    }
}
