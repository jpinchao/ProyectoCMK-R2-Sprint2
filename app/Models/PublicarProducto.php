<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicarProducto extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $foreignKey="id_usuario";
    protected $foreignKey2="id_producto";
    protected $fillable = [
       
        'id_usuario',
        'id_producto',
        'cantidad'
    
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function producto(){
        return $this->belongsTo('App\Models\Producto');

    }
}
