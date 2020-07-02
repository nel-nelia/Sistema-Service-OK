<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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
    protected $table = 'usuario';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'EntidadID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'RolID',
                  'Secret',
                  'Usuario'
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
     * Get the Entidad for this model.
     *
     * @return App\Models\Entidad
     */
    public function Entidad()
    {
        return $this->belongsTo('App\Models\Entidad','EntidadID','EntidadID');
    }

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
