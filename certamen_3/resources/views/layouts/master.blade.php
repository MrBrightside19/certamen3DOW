<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Inicio</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row d-flex">
                <img src="{{asset('images/banner.jpg')}}" class="img-fluid"alt="Responsive image" >
            </div>  
        </div>
    </header>
<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-inverse bg-secondary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-rosa"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse text-primary" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item @if(Route::current()->getName()=='home.index') active @endif">
                <a class="nav-link text-light" href="{{route('home.index')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('arriendos.index')}}">Arriendos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('usuarios.index')}}">Gestión de Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('autos.index')}}">Vehículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('clientes.index')}}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('faq.index')}}">F.A.Q</a>
            </li>
        </ul>
        <a href="#" class="btn btn-outline-ligth text-light btn-sm ml-auto mr-1" role="button">
            <i class="fas fa-user"></i> 
            {{Auth::user()->nombre}}</a>
        <a href="{{route('usuarios.logout')}}" class="btn btn-outline-ligth text-light btn-sm my-0">
            <i class="fas fa-sign-out-alt">

                Cerrar Sesión
            </i>
        </a>
    </div>
</nav>
    
@yield('contenido-principal')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>