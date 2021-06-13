<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Estudiante extends Model
{

    /***  relacion de estudiante solo tiene un genero**/
    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }
}
