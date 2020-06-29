<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
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
    protected $table = 'entidad';

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
                  'FlagActivo'
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
     * Get the persona for this model.
     *
     * @return App\Models\Persona
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona','EntidadID','EntidadID');
    }

    /**
     * Get the representante for this model.
     *
     * @return App\Models\Representante
     */
    public function representante()
    {
        return $this->hasOne('App\Models\Representante','EntidadID','EntidadID');
    }

    /**
     * Get the usuario for this model.
     *
     * @return App\Models\Usuario
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario','EntidadID','EntidadID');
    }



}
