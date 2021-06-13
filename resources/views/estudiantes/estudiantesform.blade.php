@extends('layouts.base')
<br>
<div class="container mt-5">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5">

            <!-- mesajes de confirmacion -->
            @if(session('guardado'))
                <div class="alert alert-success">
                    {{session('guardado')}}
                </div>
            @endif

            <!-- errores de validaciones -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors-> all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach

                    </ul>
                </div>
            @endif
            <!--fin error -->
            <div class="card">
                <form action="{{url('/savee')}}" method="post">
                    @csrf
                    <div class="card-header text-center">
                        Agregar estudiante
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-5">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-5">Edad</label>
                            <input type="number" name="edad" class="form-control col-md-9">
                        </div>
                         <div class="row form-group">
                            <label for="" class="col-5">email</label>
                            <input type="text" name="email" class="form-control col-md-9">
                        </div>
                         <div class="row form-group">
                            <label for="" class="col-5">Tel</label>
                            <input type="text" name="tel" class="form-control col-md-9">
                        </div>
                        <div class="row form-group">
                            <label for="" class="col-5">Género</label>
                            <select class="form-control col-md-9" name="genero_id">
                                <option value="">Seleccionar género</option>
                                @foreach($generos as $genero)
                                    <option value="{{$genero->id}}">{{$genero->genero}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-5 offset-4">Guardar</button>
                        </div>
                    </div>

                </form>

            </div>
            <a class="btn btn-light btn-xs mt-5" href="{{url('/liste')}}">Consulta de estudiantes</a>
        </div>
    </div>
</div>
