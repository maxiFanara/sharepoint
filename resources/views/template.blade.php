<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sharepoint Cafeteria</title>
</head>

<body class="h-100">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Sharepoint Cafeteria</span>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="/crearCarpeta">Nueva carpeta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/crearCanal">Nuevo Canal</a>
                </li>

            </ul>
        </div>

    </nav>
    <div class="row h-100">
        <div class="col-2" style="background-color: #D8D8D8;">
            <h4 class="ms-2 mt-2">Documentos</h4>
            <ul class="list-group ms-2">
                @foreach($carpetas as $carpeta)
                <li class="list-group-item"> <a href="/abrirCarpeta/{{$carpeta->id}}" class="link-dark link-underline-opacity-0"> <i class="bi bi-folder"></i> {{$carpeta->carpeta}}</li></a>
                @endforeach
            </ul>
            <h4 class="ms-2 mt-2">Canales</h4>
            <ul class="list-group ms-2">
            @foreach($canales as $canal)
                <li class="list-group-item"> <a href="/abrirCanal/{{$canal->id}}" class="link-dark link-underline-opacity-0"> <i class="bi bi-people-fill"></i> {{$canal->canal}}</li></a>
            @endforeach
            </ul>
        </div>
        <div class="col-10">
            <div style="background-image: url('/images/spbg.png'); background-repeat: no-repeat; 
            background-position: center; 
            background-size: contain; 
            height: 100vh; 
            min-height: 100vh; 
            background-color: rgba(255, 255, 255, 0.7); /* Fondo blanco semi-transparente */
            background-blend-mode: lighten;">
                @yield('contenido')
            </div>
        </div>
    </div>

</body>

</html>