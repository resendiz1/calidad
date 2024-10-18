@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', 'FO/GP/CC/070/01')

<div class="container bg-white mt-4 mb-3 sombra border border-5">
    <div class="row">
        <div class="col-12 text-center p-3">
            <h3 class="fw-bold">FORMATOS DE MATERIA PRIMA</h3>
            <a href="{{route('admin.view')}}" class="btn btn-success btn-sm">
                Regresar
            </a>
        </div>
    </div>
</div>


<form action="{{route('buscados.fmp')}}" method="POST">
    @csrf
    <!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->
    <div class="container mt-2 bg-white p-4 border border-5 sombra">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 mb-2">
                        <input type="text" name="busqueda" class="form-control" placeholder="producto, fecha, proveedor" autofocus >
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-2 d-flex align-items-center">
                        <button class="btn btn-primary btn-sm"> <i class="fa fa-search"></i> Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->
</form>





<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 bg-light p-4">

@forelse ($formatos as $formato)
        <a href="{{route('fmp.lleno', $formato->id)}}">
            <div class="row p-3 resizeable-table mt-1"> 
                <div class="col-sm-12 col-md-6 col-lg-2 p-2">
                    <h6> {{$formato->fecha}} </h6>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 p-2">
                    <h6> {{$formato->proveedor}} </h6>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col- p-2">
                    <h6>{{$formato->producto}}</h6>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-1 p-2">
                    <h6>{{$formato->dictamen_final}}</h6>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-3  mt-1">
                    <div class="row">

                    @if ($formato->reviso_bascula)
                        <div class="col-6">
                            <small>Bascula: </small>
                            <i class="fa fa-check mx-2"></i>
                        </div>
                    @else
                        <div class="col-6">
                            <small>Bascula: </small>
                            <i class="fa fa-clock mx-2"></i>
                        </div>
                    @endif


                    @if ($formato->reviso_produccion)
                        <div class="col-6">
                            <small>Producción: </small>
                            <i class="fa fa-check mx-2"></i>
                        </div>
                        
                    @else
                        <div class="col-6">
                            <small>Producción: </small>
                            <i class="fa fa-clock mx-2"></i>
                        </div>
                    @endif
                    </div>
                </div>



            </div>
        </a>
@empty

        <li>Sin resultados</li>
@endforelse



        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->

@endsection