@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', 'FO/GP/CC/001/001')

<div class="container bg-white mt-4 mb-3 sombra border border-5">
    <div class="row">
        <div class="col-12 text-center p-3">
            <h3 class="fw-bold">FORMATOS DE VERIFICACIÓN DE UNIDADES</h3>
        </div>
    </div>
</div>



<form action="{{route('buscados.fvu')}}" method="POST">
    @csrf
    <!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->
    <div class="container mt-2 bg-white p-4 border border-5 sombra">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-11 font-weight-bold">
                        <label for="" class="my-2  h5"> <b> Busca por:</b> Proveedor, Folio, Producto o Lote </label>
                        <input type="text" name="busqueda" class="form-control p-3 " placeholder="Busca por : Proveedor, Folio, Producto o Lote" autofocus >
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-11 d-flex align-items-center mt-2">
                        <button class="btn btn-primary w-100  "> <i class="fa fa-search mx-3"></i> Buscar</button>
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
        <a href="{{route('fvu.lleno.admin', $formato->id)}}">
            <div class="row p-3 resizeable-table mt-1 justify-content-around"> 
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <b>Folio: </b>
                    <h6 class="text-danger">{{$formato->folio}}</h6>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 p-2">
                    <b>Fecha:</b>
                    <h6> {{$formato->fecha}} </h6>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 p-2">
                    <b>Linea Transportista:</b>
                    <h6> {{$formato->linea_transportista}} </h6>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 p-2">
                    <b>Embarque:</b>
                    <h6>{{$formato->numero_embarque}}</h6>
                </div>
                <div class="col-lg-3 p-2">
                    <b>Reviso:</b>
                    <h6>{{$formato->usuario_logeado}}</h6>
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