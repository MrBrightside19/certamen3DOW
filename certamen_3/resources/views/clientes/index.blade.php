@extends('layouts.master')
@section('contenido-principal')
    <div class="container-fluid vh-100 d-flex flex-column pt-2 bodyy">
        <br>
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <h3 class="text-light"><i class="fas fa-user-friends"></i>Clientes<i class="fas fa-user-friends"></i></h3>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-12 col-lg-3 offset-lg-1">
                <form method="POST" action="{{route('clientes.store')}}">
                    @csrf
                    <div class="card">
                        <div class="card-header bg-secondary text-light text-center">
                            <i class="fas fa-user"></i>
                            Formulario Clientes
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-body formulario">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <label for="nombres">Nombres:</label>
                                        <input type="text" id="nombres"  name="nombres" class="form-control col-12 col-lg-0 " required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="apellidos">Apellidos:</label>
                                        <input type="text" id="apellido" name="apellidos" class="form-control col-12 col-lg-0 " required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <label for="rut">RUT:</label>
                                        <input type="text" id="rut" name="rut" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label for="edad">Edad:</label>
                                        <input type="number" id="edad" name="edad" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <label for="email">Email:</label>
                                <input type="email" id="email" value="ejemplo@usm.cl" name="email" class="form-control" required>
                                <br>
                                <div class="row">
                                    <div class="col pt-2 col-12 col-lg-8 offset-lg-2">
                                        <button class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Agregar Cliente</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- TABLA -->
            <div class="col-12 col-lg-8 pt-4 pt-lg-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-primary">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="text-center" width="20px"><b>Nº</b></th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">RUT</th>
                            <th class="text-center">Edad</th>
                            <th class="text-center">Correo <i class="far fa-at"></i></th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                    <td class="text-center">{{$cliente->id }}</td>
                                    <td class="text-center">{{$cliente->nombres }}</td>
                                    <td class="text-center">{{$cliente->apellidos }}</td>
                                    <td class="text-center">{{$cliente->rut }}</td>
                                    <td class="text-center">{{$cliente->edad }}</td>
                                    <td class="text-center">{{$cliente->email }}</td>
                                    <td class="text-center">
                                        <i class="fas fa-cogs btn btn-primary" data-toggle="modal" data-target="#modificar_cliente{{ $cliente->id }}"></i>
<div class="modal fade" id="modificar_cliente{{$cliente->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-light">
                <h4>Modificar Auto</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span><i class="fas fa-times text-light"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('clientes.update', $cliente->id )}}" >
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <label for="nombres">Nombres:</label>
                                <input type="text" id="nombres" class="form-control col-12 col-lg-0 " required>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" id="apellido" class="form-control col-12 col-lg-0 " required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <label for="rut">RUT:</label>
                                <input type="text" id="rut"class="form-control" required>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="edad">Edad:</label>
                                <input type="number" id="edad" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" value="ejemplo@usm.cl" class="form-control" required>
                        <br>
                        <div class="row">
                            <div class="col pt-2 col-12 col-lg-8 offset-lg-2">
                                <button class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Agregar Cliente</button>
                            </div>
                        </div>
                    </div>
                        
                        <br>
                    </div>
                    <div class="form-group pt-4">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
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

</div>
                                        <i class="fas fa-trash btn btn-primary" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        
@endsection