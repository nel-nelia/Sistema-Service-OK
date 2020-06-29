<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
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
    protected $table = 'rol';

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
                  'Descripcion',
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
     * Get the rolactividad for this model.
     *
     * @return App\Models\Rolactividad
     */
    public function rolactividad()
    {
        return $this->hasOne('App\Models\Rolactividad','RolID','RolID');
    }

    /**
     * Get the rolcalificacion for this model.
     *
     * @return App\Models\Rolcalificacion
     */
    public function rolcalificacion()
    {
        return $this->hasOne('App\Models\Rolcalificacion','RolID','RolID');
    }

    /**
     * Get the rolestablecimiento for this model.
     *
     * @return App\Models\Rolestablecimiento
     */
    public function rolestablecimiento()
    {
        return $this->hasOne('App\Models\Rolestablecimiento','RolID','RolID');
    }

    /**
     * Get the rolpersona for this model.
     *
     * @return App\Models\Rolpersona
     */
    public function rolpersona()
    {
        return $this->hasOne('App\Models\Rolpersona','RolID','RolID');
    }

    /**
     * Get the rolusuario for this model.
     *
     * @return App\Models\Rolusuario
     */
    public function rolusuario()
    {
        return $this->hasOne('App\Models\Rolusuario','RolID','RolID');
    }

    /**
     * Get the usuario for this model.
     *
     * @return App\Models\Usuario
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario','RolID','RolID');
    }



}
