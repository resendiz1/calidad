@extends('plantilla')
@section('contenido')
@section('title', 'Estadisticas Proveedores')
    


<div class="container  mt-5">
    <div class="row mt-4 justify-content-around">
        <div class="col-4 bg-white shadow shadow-sm p-3">
            <h5  class="text-center" >Proveedores con mas entregas a PABSA</h5>
            <hr>
            <canvas id="mas_pedidos"></canvas>
        </div>

        <div class="col-4 bg-white shadow shadow-sm p-3">
          <h5 class="text-center" >Proveedores mas rechazos</h5>
          <hr>
          <canvas id="mas_rechazados"></canvas>
      </div>
        
    </div>
</div>









{{-- aqui esta el codigo para generar los graficos --}}

<script>
 
  const ctx = document.getElementById('mas_pedidos');
  new Chart(ctx, {
    type: 'pie',
    
    data: {
      labels: [
        '{{$proveedores[0]->proveedor}}', 
        '{{$proveedores[1]->proveedor}}', 
        '{{$proveedores[2]->proveedor}}', 
        '{{$proveedores[3]->proveedor}}', 
        '{{$proveedores[4]->proveedor}}'
      ],

      datasets: [{
        label: 'Más entregas de Materia Prima',
        data: [

            {{$proveedores[0]->repeticiones}}, {{$proveedores[1]->repeticiones}}, {{$proveedores[2]->repeticiones}}, {{$proveedores[3]->repeticiones}}, {{$proveedores[4]->repeticiones}}

        ],


        borderWidth: 1


      }]
    },
    options: {

    }
  });




  const ctx2 = document.getElementById('mas_rechazados');
  new Chart(ctx2, {
    type: 'pie',
    
    data: {
      labels: [
        '{{$rechazados[0]->proveedor}}', 
        '{{$rechazados[1]->proveedor}}', 
        '{{$rechazados[2]->proveedor}}', 
      ],

      datasets: [{
        label: 'Más entregas de Materia Prima',
        data: [

          {{$rechazados[0]->repeticiones}}, 
          {{$rechazados[1]->repeticiones}}, 
          {{$rechazados[2]->repeticiones}}

        ],


        borderWidth: 1


      }]
    },
    options: {

    }
  });


</script>


@endsection