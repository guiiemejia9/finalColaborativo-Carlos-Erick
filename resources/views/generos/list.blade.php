@extends('layouts.base')
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-10">Consulta de géneros</h2>
            <a class="btn btn-success mb-4" href="{{url('/formg')}}">Agregar género</a>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                       <th>Género</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($generos as $genero)
                    <tr>
                        <td>{{$genero->genero}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{$generos->links()}}
        </div>
    </div>
</div>

