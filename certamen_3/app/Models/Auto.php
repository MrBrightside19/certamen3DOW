<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $table = 'autos';

    public function tiposvehiculo(){
        return $this->belongsTo('App\Models\TipoVehiculo');

        
    }

    public function arriendos(){
        return $this->belongsTo('App\Models\Arriendo');
    }

    // public function clientes(){
    //     return $this->belongsToMany('App\Models\Cliente')->withPivot('origen','destino','fecha_origen','fecha_destino');

    // }
}
