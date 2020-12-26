@extends('layouts/master')
@section('contenido-principal')
    
<div class="container-fluid d-flex flex-column pt-2 bodyy">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 text-center">
            <h3 class="text-light">Gestión de Usuarios</h3>
            <p class="text-light">
                Usted puede agregar, modificar y eliminar usuarios.
            </p>
        </div>
    </div>
    <!-- FORMULARIO -->

    <div class="row">
        <div class="col-12 col-lg-3 offset-lg-1">
            <div class="card">
                <div class="card-header text-center text-light bg-secondary">
                    <i class="fas fa-car"></i>
                    Formulario Usuario
                    <i class="fas fa-car"></i>
                </div>
                <div class="card-body formulario">
                    <form method="POST" action="{{route('usuarios.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control col-12 col-lg-0 " required>
                            <br>
                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" class="form-control col-12 col-lg-0 " required>
                            <br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="ejemplo@usm.cl" class="form-control" required>
                            <br>
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" class="form-control" required>
                            <br>
                            {{-- <label for="password">Repetir Contraseña:</label>
                            <input type="password" id="password" class="form-control" required>
                            <br> --}}
                            
                            <div class="form-group ">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="rol" id="recordar" value="0">
                                    <label for="recordar"  class="form-check-label">Administrador</label>
                                    <br>
                                    <input type="radio" class="form-check-input" name="rol" id="recordar1" value="1">
                                    <label for="recordar1" class="form-check-label">Ejecutivo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col pt-2 col-12 col-lg-8 offset-lg-2">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Agregar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORMULARIO -->
        <!-- TABLA -->
        <div class="col-12 col-lg-7 pt-4 pt-lg-0">
            <div class="table-responsive">
                <table class="table table-bordered table-primary">
                    <thead class="bg-secondary">
                        <tr>
                            <th scope="col" width="20px"><b>Nº</b></th>
                            <th scope="col">Nombre <i class="far fa-users"></i></th>
                            <th scope="col">Apellido <i class="far fa-users"></i></th>
                            <th scope="col">Correo <i class="far fa-at"></i></th>
                            <th scope="col">Tipo Usuario</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{$usuario->id}}</th>
                                <td>{{$usuario->nombre}}</td>
                                <td>{{$usuario->apellido}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    @if ($usuario->rol == 0) 
                                        Administrador
                                    @else
                                        Ejecutivo
                                    @endif
                                </td>
                                <td><i class="fas fa-cogs btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <br>
    <hr>
    <h3 class="text-light text-center">Licenciado por:</h3>
    <br>
    <div class="row">
        <div class="col-12 col-lg-3 bg-primary">
            <img src="/images/hh.png" alt="Licenciado por Hyundai" width="300px" height="180">
        </div>
        <div class="col-12 col-lg-3 bg-primary">
            <img src="/images/ss.png" alt="Licenciado por Subaru" width="300px" >
        </div>
        <div class="col-12 col-lg-3 bg-primary">
            <img src="/images/mb.png" alt="Licenciado por Subaru" width="250px"height="160" >
        </div>
        <div class="col-12 col-lg-3 bg-primary">
            <img src="/images/aa.png" alt="Licenciado por Subaru" width="300px">
        </div>
    </div>
</div>
@endsection