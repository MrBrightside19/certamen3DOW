@extends('layouts/master')
@section('contenido-principal')
<div class="container-fluid vh-100 d-flex flex-column pt-2 bodyy">
    <br>
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 text-center">
            <h3 class="text-light"><i class="fas fa-cars"></i>Gestión de Autos <i class="fas fa-cars"></i></h3>
            <p class="text-light">
                Usted puede agregar, modificar y eliminar Autos.
            </p>
        </div>
    </div>
    <br>
    
    <!-- FORMULARIO -->
    <div class="row bg-primary">
        <div class="col-12 col-lg-6 offset-lg-3">
            <form method="POST" action="{{route('autos.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header text-center text-light bg-secondary">
                        <i class="fas fa-car"></i>
                        Datos del Vehículo
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="card-body formulario">
                        <div class="form-row">
                            <div class="col-md-6 form-group" >
                                <label for="auto" class="col-form-label ">Auto</label>
                                <input type="text" id="auto" name="auto" class="form-control"  required>
                            </div>
                            
                            
                            <div class="col-md-6 form-group">
                                <label for="anio" class="col-form-label ">Año</label>
                                <input type="text" id="anio" name="anio" class="form-control"  required>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="marca" class="col-form-label ">Marca</label>
                                <input type="text" id="marca" name="marca" class="form-control"  required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="modelo" class="col-form-label ">Modelo</label>
                                <input type="text" id="modelo" name="modelo" class="form-control"  required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="clase" class="col-form-label ">Clase</label>
                                <input type="text" id="clase" name="clase" class="form-control"  required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="imagen" class="col-form-label">Imagen</label>
                                <input type="file" id="imagen" name="imagen" class="form-control" required>
                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="form-check">
                                <label for="combustible">Tipo Combustible:</label>
                                <br>
                                <input class="" value="b" type="radio" class="form-check-input" name="combustible" id="combustible1">
                                <label class="" for="combustible1" class="form-check-label">Bencina</label>
                                <br>
                                <input class="" value="d" type="radio" class="form-check-input" name="combustible" id="combustible2">
                                <label class="" for="combustible2" class="form-check-label">Diesel</label>
                                <br>
                                <input class="" value="h" type="radio" class="form-check-input" name="combustible" id="combustible3">
                                <label class="" for="combustible3" class="form-check-label">Hibrido</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col pt-2 col-12 col-lg-12 offset-lg-0">
                                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div> 

    </div>
    
    <!-- FORMULARIO -->
    <div class="row bg-primary">
        <div class="col-12 col-lg-10 offset-lg-1 pt-4 pt-lg-0 mt-3">
            <div class="table-responsive">
                <table class="table table-bordered table-primary">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="text-center" scope="col" width="20px"><b>Nº</b></th>
                            <th class="text-center" scope="col">Marca/Modelo</th>
                            <th class="text-center" scope="col">Año</th>
                            <th class="text-center" scope="col">Clase</th>
                            <th class="text-center" scope="col">Tipo Combustible</th>
                            <th class="text-center">Opciones</th>
                            
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($autos as $auto)
                            
                            <tr>
                                <th class="text-center" scope="row">{{$auto->id}}</th>
                                <td class="text-center">{{$auto->marca}} {{$auto->modelo}}</td>
                                <td class="text-center">{{$auto->anio}}</td>
                                <td class="text-center">{{$auto->clase}}</td>
                                <td class="text-center">
                                    @if ($auto->combustible == 'b')
                                    Bencina
                                    @else
                                        @if ($auto->combustible == 'd')
                                            Diesel
                                        @else  
                                            Híbrido
                                        @endif
                                    @endif
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-cogs btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"></i>
                                    <i class="fas fa-trash btn btn-primary" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                                    <i class="fas fa-glass btn btn-primary" data-toggle="modal" data-target="#mostrar_auto{{ $auto->id }}"></i>

<div class="modal fade" id="mostrar_auto{{ $auto->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Visualizacion</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>X</span>
                </button>
            </div>
            <div class="modal-body">

                <img src="{{Storage::url($auto->imagen)}}" alt="Responsive image" class="img-fluid">   
                
            </div>
                <div class="modal-footer">
                </div>
        </div>
    </div>
</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row bg-primary">
        <div class="col-12">
            <h3 class="text-light">Licenciado por:</h3>
        </div>
        <div class="col-10 offset-1 col-lg-3 offset-lg-0 bg-primary">
            <img src="{{route('/images/hh.png')}}" alt="Licenciado por Hyundai" width="300px" height="180">
        </div>
        <div class="col-10 offset-1 col-lg-3 offset-lg-0 bg-primary">
            <img src="{{route('/images/ss.png')}}" alt="Licenciado por Subaru" width="300px" >
        </div>
        <div class="col-8 offset-2 col-lg-3 offset-lg-0 bg-primary">
            <img src="{{route('/images/mb.png')}}" alt="Licenciado por Mercedes Benz" width="250px"height="160" >
        </div>
        <div class="col-10 offset-1 col-lg-3 offset-lg-0 bg-primary">
            <img src="{{route('/images/aa.png')}}" alt="Licenciado por Audi" width="300px">
        </div>
    </div>
</div>  

@endsection