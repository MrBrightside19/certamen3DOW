<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;
    protected $table = 'tiposvehiculos';

    public function autos(){
        return $this->hasMany('App\Models\Auto');
    }
}
