<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alumnos';

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
    protected $fillable = ['nombre', 'descripcion', 'grupo_id'];

    public function grupo()
    {
        return $this->belongsTo('App\Models\Grupo');
    }
    
}
