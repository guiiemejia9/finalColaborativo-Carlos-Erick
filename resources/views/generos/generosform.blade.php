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
                <form action="{{url('/saveg')}}" method="post">
                    @csrf
                    <div class="card-header text-center">
                        Agregar genero
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-5">Tipo de Gènero</label>
                            <input type="text" name="genero" class="form-control col-md-9">
                        </div>

                        <br>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-5 offset-4">Guardar</button>
                        </div>
                    </div>

                </form>

            </div>
            <a class="btn btn-light btn-xs mt-5" href="{{url('/listg')}}">Consulta de género</a>
        </div>
    </div>
</div>
