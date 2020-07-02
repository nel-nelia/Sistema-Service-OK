<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolActividad extends Model
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
    protected $table = 'rolactividad';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'RolID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'DesactivarActividad',
                  'DesactivarActividadTipo',
                  'GestionarActividad',
                  'GestionarActividadTipo'
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
     * Get the Rol for this model.
     *
     * @return App\Models\Rol
     */
    public function Rol()
    {
        return $this->belongsTo('App\Models\Rol','RolID','RolID');
    }



}
