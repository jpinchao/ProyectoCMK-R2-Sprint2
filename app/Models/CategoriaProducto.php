<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
   
    protected $table="categorias_productos";
    protected $primaryKey="id";
    protected $fillable= ['nombre','descripcion'];
    public $timestamps=false;
    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }
    
   
}
