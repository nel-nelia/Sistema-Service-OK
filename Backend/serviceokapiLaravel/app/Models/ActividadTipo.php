<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadTipo extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actividadtipo';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ActividadTipoID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'FlagActivo',
                  'Nombre'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the actividad for this model.
     *
     * @return App\Models\Actividad
     */
    public function actividad()
    {
        return $this->hasOne('App\Models\Actividad','ActividadTipoID','ActividadTipoID');
    }



}
