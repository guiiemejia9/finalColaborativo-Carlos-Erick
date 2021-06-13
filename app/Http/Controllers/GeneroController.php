<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    ///lista
    public function  list(){
        $data['generos']= Genero::paginate(3);

        return view('generos.list',$data);
    }
    //// formulario
    public function  generoform(){
        return  view('generos.generosform');
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,[
            'genero'=> 'required|string|max:75',

        ]);
        $generodata= request()->except('_token');
        Genero::insert($generodata);
        return back()->with('guardado', 'genero guardado');
    }

}
