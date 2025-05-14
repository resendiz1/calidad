<!-- BARRA DE NAVEGACIÓN -->
<div class="container-fluid p-0 bg-light border-bottom border-5  d-print-none">
    <div class="row p-2 justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-2 d-flex align-items-center text-center mt-2 mb-2">
            {{-- <img src="{{asset('img/logo.png')}}" class="img-fluid w-25 mx-auto" alt=""> <br> --}}
            <h3 class="mx-auto" style="font-family: Cascadia Code">
            <i class="fa fa-flask"></i>
                QualiTrack
            </h3>
            <i class="fa"></i>
        </div>

       <div class="col-sm-12 col-md-12 col-lg-8 d-flex align-items-center">
   
       </div>  <!--  Para que haga espacio -->

       <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-0">
                    <h6>{{  Auth::user()->nombre_completo}} </h6>
                </div>
                <div class="col-12 text-center mt-0">
                    <form action="{{route('cerrar.sesion')}}" method="POST">
                        @csrf
                        <button class="btn btn-light btn-sm" type="submit">
                            <i class="fa fa-power-off"></i>
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
       </div>

    </div>
</div>
<!-- BARRA DE NAVEGACIÓN -->


<div class="d-block d-md-none"><!-- Salto de línea en pantallas pequeñas -->
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">
    {{-- <br class="d-print-none"> --}}
    <br class="d-print-none">
    <br class="d-print-none">

</div>





@if (Auth()->user()->area == 'CALIDAD')
    <div class="container-fluid py-0 mb-5">

        <div class="row justify-content-center fw-bold">

            <div class="col-12">
                <div class="btn-group border border-5">

                    <a href="{{route('user.perfil')}}" class="btn btn-light rounded-0 " type="button" >
                        <i class="fa fa-home mx-2"></i>
                        <span>Inicio</span>
                    </a>                

                
                    <div class="dropdown">
                        <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-file-export mx-2"></i>
                            <span>MATERIA PRIMA</span>
                        </button>
                        <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('fmp.rellenar')}}">
                                <i class="fa fa-plus-circle mx-2"></i>
                                Crear Nuevo Formato
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('fmp.generados')}}">
                                <i class="fa fa-search mx-2"></i>
                                Buscar Documentos
                            </a>
                        </li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-xmark-circle mx-2"></i>
                            <span>PRODUCTO NO CONFORME</span>
                        </button>
                        <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('tabla.fpnc')}}">
                                <i class="fa fa-plus-circle mx-2"></i>
                                Llenar Nuevo Formato
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('fpnc.generados')}}">
                                <i class="fa fa-search mx-2"></i>
                                Buscar Documentos
                            </a>
                        </li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-truck mx-2"></i>
                            <span>LIBERACIÓN DE UNIDADES</span>
                        </button>
                        <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('fvu.rellenar')}}">
                                <i class="fa fa-plus-circle mx-2"></i>
                                Crear Nuevo Formato
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('fvu.tabla')}}">
                                <i class="fa fa-search mx-2"></i>
                                Buscar Documentos
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endif