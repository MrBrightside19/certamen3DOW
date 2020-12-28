<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';

    public function arriendos(){
        return $this->belongsTo('App\Models\Arriendo');
    }

    // public function autos(){
    //     return $this->belongsToMany('App\Models\Auto')->withPivot('origen','destino','fecha_origen','fecha_destino');
    // }
}
