<!-- BARRA DE NAVEGACIÓN -->
<div class="container-fluid p-0 bg-light border-bottom border-5  d-print-none  sticky-top">
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
            <div class="container-fluid">
                
                <div class="row fw-bold ">
        
                    <div class="col-12 col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <a href="{{route('admin.view')}}" class="btn btn-light rounded-0 " type="button" >
                            <i class="fa fa-home mx-2"></i>
                            <span>Inicio</span>
                        </a>            
                    </div>

                    <div class="col-auto col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <div class="dropdown">
                            <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-file-export mx-2"></i>
                                <span>Materia Prima</span>
                            </button>
                            <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{route('busqueda.fmp')}}">
                                    <i class="fa fa-search mx-2"></i>
                                    Buscar Documentos
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-auto col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <div class="dropdown">
                            <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-xmark-circle mx-2"></i>
                                <span>Producto No Conforme</span>
                            </button>
                            <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{route('busqueda.fpnc')}}">
                                    <i class="fa fa-search mx-2"></i>
                                    Buscar Documentos
                                </a>
                            </li>
                            </ul>
                        </div>    
                    </div>

                    <div class="col-auto col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <div class="dropdown">
                            <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-truck mx-2"></i>
                                <span>Liberación de Unidades</span>
                            </button>
                            <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{route('busqueda.fvu')}}">
                                    <i class="fa fa-search mx-2"></i>
                                    Buscar Documentos
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>  

                    <div class="col-auto col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <div class="dropdown">
                            <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user mx-2"></i>
                                <span>Usuarios</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{route('admin.add_usuario')}}">
                                        <i class="fa fa-user-plus mx-2"></i>
                                        Agregar Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('lista.usuarios')}}">
                                        <i class="fa fa-users mx-2"></i>
                                        Usuarios Agregados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    
                    <div class="col-auto col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <div class="dropdown">
                            <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-table mx-2"></i>
                                <span>Datos</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{route('datos.admin')}}">
                                        <i class="fa fa-box mx-2"></i>
                                        Proveedores, Productos, Etc.
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> 

                    <div class="col-auto col-sm-12 col-md-auto col-lg-auto arvo p-0">
                        <div class="dropdown">
                            <button class="btn btn-light rounded-0  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-table mx-2"></i>
                                <span>Datos</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{route('datos.admin')}}">
                                        <i class="fa fa-list-check mx-2"></i>
                                        Gestionar Proveedores, Productos y Transportistas
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>  


                </div>
        
            </div>
       </div>  <!--  Para que haga espacio -->

       <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-0">
                    <h6>
                        {{Auth::guard('adminis')->user()->nombre_completo}}
                        {{-- @if (isset(Auth::user()->nombre_completo) && Auth::guard('adminis')->user() == null )

                             @if (isset(Auth::guard()->user))
                                 {{  Auth::user()->nombre_completo}}
                             @else
                                 {{  Auth::user()->nombre_completo}}    
                             @endif

                        @else

                            @if (isset(Auth::guard('adminis')->user()->nombre_completo))
                                {{Auth::guard('adminis')->user()->nombre_completo}}
                            @endif


                        @endif --}}

                    </h6>
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