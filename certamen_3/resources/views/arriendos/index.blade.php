@extends('layouts.master')
@section('contenido-principal')
    
    <div class="container-fluid vh-100 d-flex flex-column pt-2 bodyy">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <h3 class="text-light">Solicitud de Auto</h3>
            </div>
        </div>
        <!-- FORMULARIO -->
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <form action="">
                    <div class="card">
                        <div class="card-header text-center text-light bg-secondary">
                            <i class="fas fa-car"></i>
                            Ahora, encontremos el alquiler perfecto para ti
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="card-body formulario">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="recogida">Lugar Recogida:</label>
                                        <select id="recogida" class="form-control col-12 col-lg-10">
                                            <option selected>Seleccione una opción...</option>
                                            <option>Tarapacá</option>
                                            <option>Antofagasta</option>
                                            <option>Atacama</option>
                                            <option>Coquimbo</option>
                                            <option>Valparaíso</option>
                                            <option>O'Higgins</option>
                                            <option>El Maule</option>
                                            <option>El Bío-Bío</option>
                                            <option>La Araucanía</option>
                                            <option>Los Lagos</option>
                                            <option>Aysén</option>
                                            <option>Magallanes Y Antártica Chilena</option>
                                            <option>Región Metropolitana</option>
                                            <option>Los Ríos</option>
                                            <option>Arica Y Parinacota</option>
                                            <option>Ñuble</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="entrega">Lugar Entrega:</label>
                                        <select id="entrega" class="form-control col-12 col-lg-10">
                                            <option selected>Seleccione una opción...</option>
                                            <option>Tarapacá</option>
                                            <option>Antofagasta</option>
                                            <option>Atacama</option>
                                            <option>Coquimbo</option>
                                            <option>Valparaíso</option>
                                            <option>O'Higgins</option>
                                            <option>El Maule</option>
                                            <option>El Bío-Bío</option>
                                            <option>La Araucanía</option>
                                            <option>Los Lagos</option>
                                            <option>Aysén</option>
                                            <option>Magallanes Y Antártica Chilena</option>
                                            <option>Región Metropolitana</option>
                                            <option>Los Ríos</option>
                                            <option>Arica Y Parinacota</option>
                                            <option>Ñuble</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fechar">Fecha Recogida:</label>
                                        <input type="date" id="fechar" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="fechae">Fecha Entrega:</label>
                                        <input type="date" id="fechae" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <label for="auto">Auto:</label>
                                <select id="entrega" class="form-control col-12 col-lg-10">
                                    <option selected>Seleccione una opción...</option>
                                    <option>Subaru WRX STI</option>
                                    <option>Mercedes Benz A250</option>
                                </select>
                                <br>                    
                                <div class="form-group ">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="a" id="edadc">
                                        <label for="edadc" class="form-check-label">Conductor entre 35 y 60 años</label>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pt-2 col-12 col-lg-8 offset-lg-2">
                                        <button class="btn btn-primary btn-block"> Cotizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->
        <br>
        <!-- TABLA -->
        <div class="row bodyy">
            <div class="col-12 col-lg-10 offset-lg-1 bodyy">
                <div class="table-responsive">
                    <table class="table table-bordered table-primary">
                        <thead class="bg-secondary">
                            <tr>
                                <th class="text-center"scope="col" width="20px"><b>Nº</b></th>
                                <th class="text-center"scope="col">Solicitudes</th>
                                <th class="text-center"scope="col">Lugar Recogida</th>
                                <th class="text-center"scope="col">Lugar Entrega</th>
                                <th class="text-center"scope="col">Fecha Recogida</th>
                                <th class="text-center">Fecha Entrega</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="text-center">Hyundai Tucson CRDI</td>
                                <td class="text-center">Region Metropolitana</td>
                                <td class="text-center">O'Higgins</td>
                                <td class="text-center">04/12/2020</td>
                                <td class="text-center">04/01/2021</td>
                                <td class="text-center">
                                    <i class="fas fa-cogs btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"></i>
                                    <i class="fas fa-trash btn btn-primary" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="row-12">
                <div class="col-12">
                    <h3 class="text-light">Licenciado por:</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-10 offset-1 col-lg-3 offset-lg-0 bg-primary">
                    <img src="{{asset('/images/hh.png')}}" alt="Licenciado por Hyundai" width="300px" height="180">
                </div>
                <div class="col-10 offset-1 col-lg-3 offset-lg-0 bg-primary">
                    <img src="{{asset('/images/ss.png')}}" alt="Licenciado por Subaru" width="300px" >
                </div>
                <div class="col-8 offset-2 col-lg-3 offset-lg-0 bg-primary">
                    <img src="{{asset('/images/mb.png')}}" alt="Licenciado por Mercedes Benz" width="250px"height="160" >
                </div>
                <div class="col-10 offset-1 col-lg-3 offset-lg-0 bg-primary">
                    <img src="{{asset('/images/aa.png')}}" alt="Licenciado por Audi" width="300px">
                </div>
            </div>
        </div> 
        <!-- TABLA -->
    </div>
@endsection
