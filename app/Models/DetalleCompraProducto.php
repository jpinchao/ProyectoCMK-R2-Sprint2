<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompraProducto extends Model
{
    use HasFactory;
    protected $table="detalle_compra_productos";
    protected $primaryKey="id";
    protected $foreignKey="compraID";
    
    protected $fillable= [
        'id_compra',
        'id_publicado_producto',
        'nombreProducto',
        'precioProducto',
        'descripcionProducto',
        'cantidad'
    ];

    
   
    public function publicadoproducto(){
        return $this->hasMany('App\Models\PublicarProducto');
    }
    public function compra(){
        return $this->belongsTo('App\Models\CompraPublicadoProducto');

    }


  

}
