<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arriendo extends Model
{
    use HasFactory;
    protected $table = 'arriendos';

    public function autos(){
        return $this->hasMany('App\Models\Auto');
    }

    public function clientes(){
        return $this->hasMany('App\Models\Cliente');
    }
}
