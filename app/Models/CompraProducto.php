<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraProducto extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $foreignKey="id_usuario";
   
    protected $table="compras_productos";
   
    protected $fillable = [
        'id_usuario', 
    
    ];
    

    public function user(){
        return $this->belongsTo('App\Models\User');

    }

}
