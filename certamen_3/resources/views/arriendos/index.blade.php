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
                <form method="POST" action="{{route('arriendos.store')}}">
                    @csrf
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
                                        <select id="recogida" name="recogida" class="form-control col-12 ">
                                            <option selected>Seleccione una opción...</option>
                                            <option value="1">Tarapacá</option>
                                            <option value="2">Antofagasta</option>
                                            <option value="3">Atacama</option>
                                            <option value="4">Coquimbo</option>
                                            <option value="5">Valparaíso</option>
                                            <option value="6">Del Libertador B. O'Higgins</option>
                                            <option value="7">Del Maule</option>
                                            <option value="8">Del Bíobío</option>
                                            <option value="9">La Araucanía</option>
                                            <option value="10">Los Lagos</option>
                                            <option value="11">Aisén del Gral. C. Ibáñez del Campo</option>
                                            <option value="12">Magallanes y de La Antártica Chilena</option>
                                            <option value="13">Metropolitana de Santiago</option>
                                            <option value="14">Los Ríos</option>
                                            <option value="15">Arica y Parinacota</option>
                                            <option value="16">Ñuble</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="entrega">Lugar Entrega:</label>
                                        <select id="entrega" name="entrega" class="form-control col-12 ">
                                            <option value="1">Tarapacá</option>
                                            <option value="2">Antofagasta</option>
                                            <option value="3">Atacama</option>
                                            <option value="4">Coquimbo</option>
                                            <option value="5">Valparaíso</option>
                                            <option value="6">Del Libertador B. O'Higgins</option>
                                            <option value="7">Del Maule</option>
                                            <option value="8">Del Bíobío</option>
                                            <option value="9">La Araucanía</option>
                                            <option value="10">Los Lagos</option>
                                            <option value="11">Aisén del Gral. C. Ibáñez del Campo</option>
                                            <option value="12">Magallanes y de La Antártica Chilena</option>
                                            <option value="13">Metropolitana de Santiago</option>
                                            <option value="14">Los Ríos</option>
                                            <option value="15">Arica y Parinacota</option>
                                            <option value="16">Ñuble</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fechar">Fecha Recogida:</label>
                                        <input type="date" id="fechar" name="fechar" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="fechae">Fecha Entrega:</label>
                                        <input type="date" id="fechae" name="fechae" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6"> 
                                        <label for="auto">Auto:</label>
                                        <select name="auto" id="entrega" class="form-control col-12 ">
                                            <option selected>Seleccione una opción...</option>
                                            @foreach ($autos as $auto)
                                                
                                            <option value="{{$auto->id}}">{{$auto->tiposvehiculo->marca}}/{{$auto->tiposvehiculo->modelo}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="cliente">Clientes:</label>
                                        <select class="form-control col-12 " id="cliente" name="cliente">  
                                            <option selected>Seleccione una opción...</option>
                                            @foreach ($clientes as $cliente)
                                                
                                            <option value="{{$cliente->id}}">{{$cliente->nombres}}/{{$cliente->apellidos}}</option>
                                            
                                            @endforeach      
                                        </select>               
                                    </div>
                                </div>
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
        <div class="row bodyy mt-3">
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
                            @foreach ($arriendos as $num=>$arriendo)
                                <tr>
                                    <th class="text-center" scope="row">{{$num+1}}</th>
                                    {{-- select t.marca from tiposvehiculos t, autos a, arriendos ar where a.tiposvehiculos_id = t.auto_id and a.id = ar.auto_id --}}
                                    
                                    <td class="text-center">{{DB::table('tiposvehiculos')->join('autos','tiposvehiculos.id','=','autos.tiposvehiculo_id')
                                                                                        ->join('arriendos','arriendos.auto_id','=','autos.id')
                                                                                        ->value('tiposvehiculos.marca')}}
                                    
                                    
                                    </td>
                                    <td class="text-center">{{$arriendo->origen }}</td>
                                    <td class="text-center">{{$arriendo->destino }}</td>
                                    <td class="text-center">{{$arriendo->fecha_origen }}</td>
                                    <td class="text-center">{{$arriendo->fecha_destino }}</td>
                                    <td class="text-center">
                                        <i class="fas fa-cogs btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"></i>
                                        <i class="fas fa-trash btn btn-primary" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                                    </td>
                                </tr>
                                
                            @endforeach
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
            <div class="row ">
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
            <div class="row bg-primary text-light">
                <div class="col-8 offset-2">
                    <h4 class="col-12">Redes Sociales:</h4>
                    <h4 class="pl-5"><i class="fab fa-instagram"></i><i class="fad fa-at pl-3"></i>Rentcarz</h4>
                    <h4 class="pl-5"><i class="fab fa-facebook-square pr-3"></i>RentCarz Oficial</h4>
                    <h4 class="pl-5"><i class="fab fa-twitter-square pr-3"></i>RentCarz Oficial</h4>
                    <h4 class="pl-5"><i class="fas fa-envelope pr-3"></i>contacto<i class="fas fa-at"></i>rentCarz.cl</h4>
                </div>
            </div>
        </div> 
        <!-- TABLA -->
    </div>
@endsection
