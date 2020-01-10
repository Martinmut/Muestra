<?php
namespace App\Models\Demo;
use Illuminate\Database\Eloquent\Model;
class Tarea extends Model { 
    protected $table ='pendientes';
    protected $primaryKey ='tareaid';
    public $incrementing ='false';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable=sirve para asignar los atributos que va a tener el modelo(son los atributos de la clase)}

    protected $fillable = [
        'tareaid', 'name', 'description', 'estatus','imagen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidde=son los datos que no se va mostrar
    protected $hidden = [
    
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    //es el nombre del atributo y para convertir un tipo de atributo a otro
    protected $casts = [
       
    ];

}
