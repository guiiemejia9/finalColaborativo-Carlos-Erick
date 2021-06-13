@extends('layouts.base')
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-10">Consulta de estudiantes</h2>
            <a class="btn btn-success mb-4" href="{{url('/forme')}}">Agregar estudiante</a>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                       <th>Nombre</th>
                        <th>Edad</th>
                       <th>Email</th>
                       <th>Tel</th>
                       <th>Género</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($estudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->edad}}</td>
                        <td>{{$estudiante->email}}</td>
                        <td>{{$estudiante->tel}}</td>
                        <td>{{$estudiante->genero->genero}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{$estudiantes->links()}}
        </div>
    </div>
</div>

