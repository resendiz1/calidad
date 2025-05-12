<!-- BARRA DE NAVEGACIÓN -->
<div class="container-fluid p-0 bg-light border-bottom border-5 fixed-top mb-5 d-print-none">
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
                    <h6>
                        @if (isset(Auth::user()->nombre_completo) && Auth::guard('adminis')->user() == null )

                             @if (isset(Auth::guard()->user))
                                 {{  Auth::user()->nombre_completo}}
                             @else
                                 {{  Auth::user()->nombre_completo}}    
                             @endif

                        @else

                            @if (isset(Auth::guard('adminis')->user()->nombre_completo))
                                {{Auth::guard('adminis')->user()->nombre_completo}}
                            @endif


                        @endif

                      


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
<br>
<br>
<br class="d-print-none">
<br class="d-print-none">

<div class="d-block d-md-none"><!-- Salto de línea en pantallas pequeñas -->
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">
    <br class="d-print-none">

</div>