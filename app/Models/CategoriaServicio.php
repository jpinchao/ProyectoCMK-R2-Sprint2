<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServicio extends Model
{
    use HasFactory;
    protected $table="categorias_servicios";
    protected $primaryKey="id";
    protected $fillable= ['nombre','descripcion'];
    public $timestamps=false;
}
