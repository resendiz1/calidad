@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', Auth::user()->nombre_completo)



<!-- MENU DE OPCIONES -->
<br>

<div class="container">
    <div class="row  justify-content-around">






{{-- SECCION DE BUSQUEDA DE DOCUMENTOS --}}   
<div class="col-sm-12 col-md-6 col-lg-12 m-3 border border-5 bg-white p-5 mt-5">
    
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="fw-bold">
                <i class="fa-solid fa-magnifying-glass"></i>
                BUSCAR DOCUMENTOS
            </h3>
        </div>
    </div>


    <div class="row d-flex justify-content-center">

        {{-- card rellenar  formatos materia prima --}}
        <div class="col-sm-12 col-lg-3 sombra btn  resizeable-div   border border-5 m-2">
            <a href="{{route('busqueda.fmp')}}">
                <div class="row">
                    <div class="col-12 p-4">
                        <h6 class="mx-auto mt-3">MATERIA PRIMA</h6>
                        <i class="fa-solid fa-wheat-awn fa-2x text-secondary mt-3"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- card rellenar  formatos materia prima --}}




        {{-- card documentos generados formato materia prima --}}
        <div class="col-sm-12 col-lg-3 sombra btn resizeable-div  border border-5 m-2">
            <a href="{{route('busqueda.fpnc')}}">
                <div class="row">
                    <div class="col-12 p-4 mt-3">
                        <h6 class="mx-auto">PRODUCTO NO CONFORME</h6>
                        <i class="fa-solid fa-ban fa-2x text-secondary mt-3"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- card documentos generados formato materia prima --}}      
        


        {{-- card documentos generados formato materia prima --}}
        <div class="col-sm-12  col-lg-3 sombra btn resizeable-div  border border-5 m-2">
            <a href="{{route('busqueda.fvu')}}">
                <div class="row">
                    <div class="col-12 p-4 mt-3">
                        <h6 class="mx-auto">LIBERACIÓN DE UNIDADES</h6>
                        <i class="fa-solid fa-truck fa-2x text-secondary mt-3"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- card documentos generados formato materia prima --}}      






    </div>
</div>
{{-- SECCION DE BUSQUEDA DE DOCUMENTOS --}}   















{{-- SECCION DE GESTIONAR USUARIOS --}}   
<div class="col-sm-12 col-md-6 col-lg-12 m-3 border border-5 bg-white p-5 mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="fw-bold">
                <i class="fa fa-table"></i>
                GESTIONAR DATOS
            </h3>
        </div>
    </div>


    <div class="row d-flex justify-content-center">

        {{-- card rellenar  formatos materia prima --}}
        <div class="col-sm-12 col-lg-3 sombra btn resizeable-div   border border-5 m-2">
            <a href="{{route('lista.usuarios')}}">
                <div class="row">
                    <div class="col-12 p-4">
                        <h6 class="mx-auto mt-3">GESTIONAR USUARIOS</h6>
                        <i class="fa-solid fa-users fa-2x text-secondary mt-3"></i>

                    </div>
                </div>
            </a>
        </div>
        {{-- card rellenar  formatos materia prima --}}



        {{-- card rellenar  formatos materia prima --}}
        <div class="col-sm-12 col-lg-3 sombra btn resizeable-div   border border-5 m-2">
            <a href="{{route('datos.admin')}}">
                <div class="row">
                    <div class="col-12 p-4">
                        <h6 class="mx-auto mt-3">GESTIONAR DATOS</h6>
                        <i class="fa-solid fa-database fa-2x text-secondary mt-3"></i>

                    </div>
                </div>
            </a>
        </div>
        {{-- card rellenar  formatos materia prima --}}



        <div class="col-sm-12 col-lg-3 sombra btn resizeable-div   border border-5 m-2">
            <a href="{{route('estadisticas.proveedores')}}">
                <div class="row">
                    <div class="col-12 p-4">
                        <h6 class="mx-auto mt-3">DATOS RECOPILADOS</h6>
                        <i class="fa-solid fa-chart-line fa-2x text-secondary mt-3"></i>
                    </div>
                </div>
            </a>
        </div>


        {{-- <div class="col-sm-12 col-lg-4 sombra btn resizeable-div   border border-5 m-2">
            <a href="{{route('actualizar.encabezados')}}">
                <div class="row">
                    <div class="col-12 p-4">
                        <h6 class="mx-auto mt-3">ACTUALIZAR DATOS DE LOS ENCABEZADOS</h6>
                    </div>
                </div>
            </a>
        </div> --}}




        {{-- card documentos generados formato materia prima --}}
        {{-- <div class="col-sm-12 col-lg-6 sombra btn resizeable-div  border border-5  mt-3">
            <a href="{{route('admin.add_usuario')}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h6 class="mx-auto">AGREGAR USUARIOS</h6>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-pencil fa-2x mt-2"></i>
                    </div>
                </div>
            </a>
        </div> --}}
          {{-- card documentos generados formato materia prima --}}            


    </div>
</div>
{{-- SECCION DE GESTIONAR USUARIOS --}}   






        



    </div>
</div>

<!-- MENU DE OPCIONES -->
<br>
<br>
<br>
<br>
<br>
<br>
@endsection