<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
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
    protected $table = 'calificacion';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'CalificacionID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Comentario',
                  'EstablecimientoID',
                  'NumeroEstrellas'
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
     * Get the Establecimiento for this model.
     *
     * @return App\Models\Establecimiento
     */
    public function Establecimiento()
    {
        return $this->belongsTo('App\Models\Establecimiento','EstablecimientoID','EstablecimientoID');
    }



}
