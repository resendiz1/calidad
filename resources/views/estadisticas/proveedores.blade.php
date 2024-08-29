@extends('plantilla')
@section('contenido')
@section('title', 'Estadisticas Proveedores')
    



<div class="container  mt-5">
    <div class="row mt-4 justify-content-center">
        <div class="col-6 bg-white">
            <h2>Carros con plaga</h2>

            <hr>

            <canvas id="plaga"></canvas>

        </div>
        
    </div>
</div>









{{-- aqui esta el codigo para generar los graficos --}}

<script>
 
  const ctx = document.getElementById('plaga');
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Redes', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Ganadores',
        data: [
            12, 19, 3, 5, 2, 3
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


@endsection