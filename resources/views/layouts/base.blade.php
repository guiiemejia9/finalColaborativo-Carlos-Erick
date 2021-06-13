<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.slim.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="true" >Registrar</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">

                        <li><a class="dropdown-item" href="{{url('/forme')}}">Registrar estudiantes</a></li>
                        <li><a class="dropdown-item" href="{{url('/formg')}}">Registrar géneros</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="true" >Consultar</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="{{url('/liste')}}">Consulta de estudiantes</a></li>
                        <li><a class="dropdown-item" href="{{url('/listg')}}">Consulta de géneros</a></li>

                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>

<main role="main">

    @section('content')


    @endsection
</main><!-- /.container -->



</body>


</html>
