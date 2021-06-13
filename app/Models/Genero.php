<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    /***  relacion de generos a muchos cliente**/
    public function genderos(){

        return $this->hasMany('App\Models\Estudiante');
    }
}
