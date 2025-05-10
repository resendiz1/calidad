@extends('plantilla')
@section('contenido')
@section('title', 'Estadisticas Proveedores')
@include('assets.nav')
@include('assets.nav_admin')
    


<div class="container  mt-5">


    <div class="row mt-4 justify-content-center">

        <div class="col-12 m-2 bg-white shadow shadow-sm p-3">
            <h2  class="text-center" >Proveedores con más entregas a PABSA</h2>
            <hr>
            <canvas id="mas_pedidos"></canvas>
        </div>

        <div class="col-12 m-2 bg-white shadow shadow-sm p-3">
            <h2 class="text-center" >Proveedores con más rechazos en FMP</h2>
            <hr>
            <canvas id="mas_rechazados"></canvas>
        </div>


        
    </div>



</div>









{{-- aqui esta el codigo para generar los graficos --}}

<script>
 
  const ctx = document.getElementById('mas_pedidos');
  new Chart(ctx, {
    type: 'line',
    
    data: {
      labels: [
        @forelse($proveedores as $proveedor)
         '{{$proveedor->proveedor}}', 
        @empty
          <li> No hay datos </li>
        @endforelse

      ],

      datasets: [{
        label: 'Más entregas de Materia Prima',
        data: [

          @forelse($proveedores as $proveedor)
            {{$proveedor->repeticiones}}, 
          @empty
            <li>No hay datos</li>
          @endforelse


        ],


        borderWidth: 1


      }]
    },

    options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Más Entregas'
      }
    }
  },
  });




  const ctx2 = document.getElementById('mas_rechazados');
  new Chart(ctx2, {
    type: 'bar',
    


    data: {
      labels: [
        
        @forelse ($rechazados as $rechazado) //Esta parte es de blade, la puse a ver si jalaba y jalo XDDD
          '{{$rechazado->proveedor}}', 
        @empty//Esta parte es de blade, la puse a ver si jalaba y jalo XDDD

        <li>Sin resultados</li>
        @endforelse//Esta parte es de blade, la puse a ver si jalaba y jalo XDDD

      ],

      datasets: [{
        label: 'Más entregas de Materia Prima',
        data: [

        //la estructura del forelse es 
          @forelse($rechazados as $rechazado)

           '{{$rechazado->repeticiones}}',

          @empty
          <li>No hay resultados</li>
          @endforelse

        ],


        borderWidth: 1


      }]
    },

    options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Más rechazados'
      }
    }
  },


  });


</script>


@endsection