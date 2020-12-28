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
                            <th scope="col">Nombre <i class="far fa-user"></i></th>
                            <th scope="col">Apellido <i class="far fa-user"></i></th>
                            <th scope="col">Correo <i class="far fa-at"></i></th>
                            <th scope="col">Tipo Usuario <i class="far fa-users"></i></th>
                            <th class="text-center">Opciones</th>
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
                                <td class="text-center">
                                    {{-- <i class="fas fa-cogs btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"></i> --}}
                                    <i class="fas fa-trash btn btn-primary" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                                    <a href="#" class="btn btn-primary fas fa-cogs" data-toggle="modal" data-target="#modificar_usuario{{$usuario->id}}"></a>
                                </td>
{{-- Modificar usuario --}}
<div class="modal fade" id="modificar_usuario{{$usuario->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Modificar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>X</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('usuarios.update', $usuario->id )}}">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control"  value="{{$usuario->nombre}}" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control"  value="{{$usuario->apellido}}" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control"  value="{{$usuario->email}}" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control"  required>
                            
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="form-check">
                            
                            <input type="radio" class="form-check-input" name="rol" id="recordar" value="0"  @if ($usuario->rol == 0) checked  @endif>
                            <label for="recordar"  class="form-check-label">Administrador</label>
                            <br>
                        
                            <input type="radio" class="form-check-input" name="rol" id="recordar1" value="1" @if ($usuario->rol != 0)  checked  @endif>
                            <label for="recordar1" class="form-check-label">Ejecutivo</label>
                            
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Modificar</button>         
                        <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Salir</button>
                    </div>


                </form>
                </div>
                <div class="modal-footer">
                </div>
        </div>
    </div>  
</div>




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