<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
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
    protected $table = 'actividad';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ActividadID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'ActividadTipoID',
                  'Descripcion',
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
     * Get the Actividadtipo for this model.
     *
     * @return App\Models\Actividadtipo
     */
    public function Actividadtipo()
    {
        return $this->belongsTo('App\Models\Actividadtipo','ActividadTipoID','ActividadTipoID');
    }

    /**
     * Get the establecimiento for this model.
     *
     * @return App\Models\Establecimiento
     */
    public function establecimiento()
    {
        return $this->hasOne('App\Models\Establecimiento','ActividadID','ActividadID');
    }



}
