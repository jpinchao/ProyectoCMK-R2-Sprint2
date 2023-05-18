<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


//spatie
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey="id";
    protected $foreignKey="id_direccion";
    protected $foreignKey2="id_suscripcion";
    protected $table="users";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'id_direccion',
        'id_suscripcion'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function publicarproductos(){
        return $this->hasMany('App\Models\PublicarProducto');
    }
    public function compraproductos(){
        return $this->hasMany('App\Models\CompraPublicadoProducto');
    }
    public function direccion(){
        return $this->belongsTo('App\Models\Direcciones');
    }
    public function suscripcion(){
        return $this->belongsTo('App\Models\Suscripcion');
    }
}
