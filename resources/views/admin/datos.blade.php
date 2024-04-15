@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', 'Datos')



<div class="container mt-5">
    <div class="row justify-content-around">



{{-- TABLA Y MODAL DE LOS DATOS DE PROVEEDORES --}}

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 border m-3 bg-white sombra p-4 ">
            <div class="row justify-content-center">
                <div class="col-2 text-center"></div>

                <div class="col-8 text-center">
                    <h5 class="fw-bold">PROVEEDORES</h5>
                </div>

                <div class="col-2 text-center">
                    <a class="btn btn-success btn-sm rounded rounded-circle" data-bs-toggle="modal" data-bs-target="#add_proveedores">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

            </div>

            <hr>

        <div class="row scroll-tabla">

        
            <table class="table  table-striped mt-3 ">
                <thead>
                  <tr>
                    <th scope="col">Creado</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Borrar</th>
                  </tr>
                </thead>
                <tbody>


            @forelse ($proveedores as $proveedor)
            <tr>
                <td>{{substr($proveedor->created_at, 0, -9)}}</td>
                <td>{{$proveedor->nombre_proveedor}}</td>
                <td>
                    <button class="btn btn-danger btn-sm w-50" data-bs-toggle="modal" data-bs-target="#d{{$proveedor->id}}">
                        <i class="fa fa-eraser"></i>
                    </button>
                </td>
            </tr>

                                {{-- modal confirma eliminacion --}}
            <div class="modal fade" id="d{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content ">
                        <div class="modal-body">
                            <h6 class="text-center fw-bold">¿SEGURO QUE DESEA ELIMINAR AL PROVEEDOR?</h6>

                            <form action="{{route('delete.proveedor', $proveedor->id)}}" method="POST"  class="mt-4">
                                @csrf @method("DELETE")
                                <div class="form-group mt-3">
                                    <button class="btn btn-success btn-sm w-100">SI</button>
                                </div>
                            </form>
                                <div class="form-group mt-3">
                                    <button class="btn btn-danger btn-sm w-100" data-bs-dismiss="modal">NO</button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
                    {{-- modal confirma eliminacion --}}

            @empty
                <li>Sin registros de proveedores</li>
            @endforelse

            
                </tbody>
              </table>
            </div>




        </div>


                {{-- modal de ADD PROVEDORES --}}
        <div class="modal fade" id="add_proveedores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content ">
                    <div class="modal-body">
                        <h4 class="text-center">Agregando proveedores</h4>
                        <form action="{{route('add.proveedores')}}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nombre_proveedor" class="form-control w-100" placeholder="Nombre">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-success btn-sm w-100">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                {{-- modal de ADD PROVEDORES --}}



{{-- TABLA Y MODAL DE LOS DATOS DE PROVEEDORES --}}











        






    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 border m-3 bg-white sombra p-4">

            <div class="row justify-content-center">
                <div class="col-2 text-center"></div>

                <div class="col-8 text-center">
                    <h5 class="fw-bold">LINEAS TRANSPORTISTAS</h5>
                </div>

                <div class="col-2 text-center">
                    <a class="btn btn-success btn-sm rounded rounded-circle" data-bs-toggle="modal" data-bs-target="#add_transportistas">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

            </div>
            <hr>


        <div class="row scroll-tabla">
            <table class="table table-coqueta table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Creado</th>
                        <th scope="col">Línea Transportista</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($transportistas as $transportista)
                    <tr>
                        <td>{{substr($transportista->created_at, 0, -9)}}</td>
                        <td>{{$transportista->nombre_transportista}}</td>
                        <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#d{{$transportista->id}}"><i class="fa fa-eraser"></i></button></td>
                    </tr>

                                {{-- modal confirma eliminacion --}}
                    <div class="modal fade" id="d{{$transportista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content ">
                                <div class="modal-body">
                                    <h6 class="text-center fw-bold">¿SEGURO QUE DESEA ELIMINAR AL TRANSPORTISTA?</h6>

                                    <form action="{{route('delete.transportista', $transportista->id)}}" method="POST"  class="mt-4">
                                        @csrf @method("DELETE")
                                        <div class="form-group mt-3">
                                            <button class="btn btn-success btn-sm w-100">SI</button>
                                        </div>
                                    </form>
                                        <div class="form-group mt-3">
                                            <button class="btn btn-danger btn-sm w-100" data-bs-dismiss="modal">NO</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal confirma eliminacion --}}






                    @empty
                        <li>No hay transportistas registrados</li>
                    @endforelse                


                </tbody>
            </table>
        </div>



    </div>






        {{-- modal de ADD PROVEDORES --}}
        <div class="modal fade" id="add_transportistas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content ">
                    <div class="modal-body">
                        <h4 class="text-center">Agregando Transportistas</h4>
                        <form action="{{route('add.transportista')}}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nombre_transportista" class="form-control w-100" placeholder="Nombre">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-success btn-sm w-100">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal de ADD PROVEDORES --}}























        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 border m-3 bg-white sombra p-4">

            <div class="row justify-content-center">

                <div class="col-2 text-center">

                </div>

                <div class="col-8 text-center">
                    <h5 class="fw-bold">PRODUCTO</h5>
                </div>

                <div class="col-2 text-center">
                    <a class="btn btn-success btn-sm rounded rounded-circle" data-bs-toggle="modal" data-bs-target="#add_productos">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

            </div>
            <hr>

            <div class="row scroll-tabla">
                <table class="table table-coqueta table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Creado</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Borrar</th>
                    </tr>
                    </thead>
                    <tbody>

                @forelse ($productos as $producto)
                    <tr>
                        <td>{{substr($producto->created_at, 0 , -9)}}</td>
                        <td>{!!$producto->nombre_producto!!}</td>
                        <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#d{{$producto->id}}"><i class="fa fa-eraser"></i></button></td>
                    </tr>


                                {{-- modal confirma eliminacion --}}
                    <div class="modal fade" id="d{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content ">
                                <div class="modal-body">
                                    <h6 class="text-center fw-bold">¿SEGURO QUE DESEA ELIMINAR AL PRODUCTO?</h6>

                                    <form action="{{route('delete.producto', $producto->id)}}" method="POST"  class="mt-4">
                                        @csrf @method("DELETE")
                                        <div class="form-group mt-3">
                                            <button class="btn btn-success btn-sm w-100">SI</button>
                                        </div>
                                    </form>
                                        <div class="form-group mt-3">
                                            <button class="btn btn-danger btn-sm w-100" data-bs-dismiss="modal">NO</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal confirma eliminacion --}}





                    
                @empty
                    <li>No hay productos</li>
                @endforelse 



                    </tbody>
                </table>
            </div>




         </div>{{-- div que cierra el contenedor de la seccion --}}





        {{-- modal de ADD PRODUCTOS --}}
        <div class="modal fade" id="add_productos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content ">
                    <div class="modal-body">
                        <h4 class="text-center">Agregando Productos</h4>
                        <form action="{{route('add.productos')}}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nombre_producto" class="form-control w-100" placeholder="Nombre">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-success btn-sm w-100">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal de ADD PRODUCTOS --}}























    </div>

</div> {{-- div que cierra todo --}}







{{-- notificaciones  --}}

{{-- alertas de que el usurio se agrego con exito o que hubo un error se desaparecen en 3 segundos--}}
@if (session('add_proveedor'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('add_proveedor')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 2500);
         });
        
    </script>
 
@endif
{{-- notificaciones  --}}



{{-- alertas que notifica si el proveedor fue eliminado--}}
@if (session('proveedor_eliminado'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('proveedor_eliminado')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 2500);
         });
        
    </script>
 
@endif
{{-- notificaciones  --}}


{{-- alertas que notifica si el proveedor fue eliminado--}}
@if (session('add_transportista'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('add_transportista')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 2500);
         });
        
    </script>
 
@endif
{{-- notificaciones  --}}


{{-- alertas que notifica si el proveedor fue eliminado--}}
@if (session('delete_transportista'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('delete_transportista')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 2500);
         });
        
    </script>
 
@endif
{{-- notificaciones  --}}


{{-- alertas que notifica si el proveedor fue eliminado--}}
@if (session('add_producto'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('add_producto')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 2500);
         });
        
    </script>
 
@endif
{{-- notificaciones  --}}



{{-- alertas que notifica si el proveedor fue eliminado--}}
@if (session('producto_delete'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('producto_delete')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 2500);
         });
        
    </script>
 
@endif
{{-- notificaciones  --}}












@endsection