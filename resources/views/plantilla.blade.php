<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.60">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/img/icon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>
  </head>
  <body>



    @yield('contenido')


{{-- aqui yace el codigo que da origen al modal --}}

<button class="btn boton_flotante" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa fa-comment"></i>
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sugerencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <span>¿Que te gustaria agregar o quitar de este sitio web, </span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{-- aqui yace el codigo que da origen al modal --}}




    <script>

        // aqui esta el codigo que hace funcionar al loader
        document.getElementById('form').addEventListener('submit', function(){

          //moistrando el loader
          document.getElementById('formLoader').classList.remove('d-none');
          //ponemos la clase al formulario para que se ponga opaquito
          this.classList.add('form-sending');
  
      })
  // aqui esta el codigo que hace funcionar al loader
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        // codigo para el ojito de el input password

        $(document).ready(function() {
         $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {       
             input.attr("type", "password");
          }
         });
     });



     //codigo que me regresa a la pagina anterior en FVU LLENO

     document.getElementById('back').addEventListener('click', function(){

      if(document.referrer){
        window.location.href = document.referrer;
      }
      else{

      }

     });

    </script>

    <script>

      //ESTE SCRIPT ENVIA UN PING CADA 5 MINUTOS PARA QUE LA SESSION NO SE CIERRE
      setInterval(() => {
          fetch('/keep-alive'); // Debes crear esta ruta
      }, 5 * 60 * 1000); // cada 5 minutos

    </script>


  <script>
      //aqui va el codigo del select 2
      $(document).ready(function(){
        $('.select_busqueda').select2();
      })
  </script>




  <script>

    $(window).on('resize', function () {
        $('.select_busqueda').each(function () {
            $(this).select2('destroy').select2({
                theme: 'bootstrap-5',
                placeholder: 'Selecciona una opción',
                width: 'resolve' // esto es clave
            });
        });
    });


  </script>


  <script>
    const unidad = document.getElementById('unidad');
    const unidad_medida = document.getElementById('unidad_medida');


    unidad.addEventListener('change', function(){


      unidad_medida.innerHTML = unidad.value;


    })





  </script>




  </body>
</html>