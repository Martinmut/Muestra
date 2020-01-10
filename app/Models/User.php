<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable=sirve para asignar los atributos que va a tener el modelo(son los atributos de la clase)}

    protected $fillable = [
        'name', 'email', 'password','usuario','perfil'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidde=son los datos que no se va mostrar
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //es el nombre del atributo y para convertir un tipo de atributo a otro
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
