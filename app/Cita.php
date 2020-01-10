<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'citas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'usuario_id', 'vehiculo_id', 'lugar'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
    
}
