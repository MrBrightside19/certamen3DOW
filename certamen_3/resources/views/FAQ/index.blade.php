@extends('layouts/master')
@section('contenido-principal')
    <div class="container-fluid vh-100 d-flex flex-column pt-2 bodyy">
        <br>
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <h3 class="text-light"><i class="fas fa-question-circle"></i>Preguntas Frecuentes <i class="fas fa-question-circle"></i></h3>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-12 pl-5 text-light">
                <h3>¿Quienes Somos?</h3>
                <p>Somos una nueva empresa de alquiler de autos en Chile, expertos en brindarte el mejor vehiculo para ti, ajustandonos a tus gustos y con variedad de autos a lo largo de todo el País.</p>
                <hr>
                <h3>¿Debo tener alguna edad mínima para poder alquilar un vehículo?</h3>
                <p>La respuesta es sí, debes tener un minimo de 35 años para poder optar a arrendar un auto.</p>
                <hr>
                <h3>¿Cuanto es el mínimo y máximo de días para realizar un arriendo?</h3>
                <p>El mínimo de días que puedes arrendar un vehiculo es de 2 días, y el máximo es de 30 días.</p>
                <hr>
                <h3>¿Que tipos de metodos de pago aceptan?</h3>
                <p>Aceptamos todo medio de pago, ya sea, pago con tarjeta (débito y crédito), transferencias y efectivo.</p>
            </div>
        </div>
        <br>
        <hr>
        <div class="row bg-primary">
            <div class="col-12">
                <h3 class="text-light">Licenciado por:</h3>
            </div>
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
@endsection