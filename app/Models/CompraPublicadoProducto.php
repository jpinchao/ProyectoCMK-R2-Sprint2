<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraPublicadoProducto extends Model
{
    //use HasFactory;
    protected $table="compras_productos";
    protected $primaryKey="id";
    protected $foreignKey="id_usuario";
    protected $fillable= ['id_usuario'];
  
    public function user(){
        return $this->belongsTo('App\Models\User');

    }
}
