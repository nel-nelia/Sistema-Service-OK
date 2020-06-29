<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
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
    protected $table = 'establecimiento';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'EstablecimientoID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'ActividadID',
                  'CoordenadaX',
                  'CoordenadaY',
                  'Delivery',
                  'EntidadID',
                  'FlagActivo',
                  'Nombre',
                  'Permiso',
                  'RUC',
                  'Telefono',
                  'WhatsappURL'
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
     * Get the Actividad for this model.
     *
     * @return App\Models\Actividad
     */
    public function Actividad()
    {
        return $this->belongsTo('App\Models\Actividad','ActividadID','ActividadID');
    }

    /**
     * Get the Representante for this model.
     *
     * @return App\Models\Representante
     */
    public function Representante()
    {
        return $this->belongsTo('App\Models\Representante','EntidadID','EntidadID');
    }

    /**
     * Get the calificacion for this model.
     *
     * @return App\Models\Calificacion
     */
    public function calificacion()
    {
        return $this->hasOne('App\Models\Calificacion','EstablecimientoID','EstablecimientoID');
    }



}
