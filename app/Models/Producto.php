<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;
   
    protected $primaryKey="id";
    protected $foreignKey="id_categoria";
    protected $table="productos";
   
    protected $fillable = [
        'nombre', 
        'precio',
        'descripcion',
        'imagen',
        'id_categoria',
    
    ];
   

    public function categoria(){
        return $this->belongsTo('App\Models\CategoriaProducto');

    }

   
}