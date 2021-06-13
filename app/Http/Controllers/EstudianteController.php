<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Genero;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    ///lista estudiante
    public function  list(){
        $data['estudiantes']= Estudiante::paginate(3);

        return view('estudiantes.list',$data);
    }
    //// formulario
    public function  estudianteform(){
        $generos=Genero::all();
        return  view('estudiantes.estudiantesform',compact('generos'));
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,[
            'nombre'=> 'required|string|max:75',
            'edad'=> 'required|integer',
            'email'=> 'required|string|max:75|email|unique:estudiantes',
            'tel'=> 'required|string|max:12',
            'genero_id'=> 'required',

        ]);
        $estudiantedata= request()->except('_token');
        Estudiante::insert($estudiantedata);
        return back()->with('guardado', 'estudiante guardado');
    }

}
