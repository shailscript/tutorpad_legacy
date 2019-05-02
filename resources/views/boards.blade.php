@extends('layouts.app')

@section('content')
  <div class="container">
              <div class="row">
                <canvas id="myChart"></canvas>
              </div>
      </div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ["CBSE", "ICSE", "GSEB"],
          datasets: [{
              label: '# of institutes',
              data: [{{$data['cbse']}}, {{$data['icse']}}, {{$data['gseb']}}],
              backgroundColor: [
                  'rgba(13, 60, 85, 1)',
                  'rgba(19, 149, 186, 1)',
                  'rgba(241, 108, 32, 1)'
             ],
         }]

      },
      options: {
        responsive: true,
        maintainAspectRatio: true
      }
  });
  </script>

@endsection
