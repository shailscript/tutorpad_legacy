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
      type: 'bar',
      data: {
          labels: ["5 Star", "4 Star", "3 Star", "2 Star", "1 Star"],
          datasets: [{
              label: 'Education',
              data: [{{$data['edu5']}}, {{$data['edu4']}}, {{$data['edu3']}}, {{$data['edu2']}}, {{$data['edu1']}} ],
              backgroundColor: [
                  'rgba(13, 60, 85, 1)',
                  'rgba(13, 60, 85, 1)',
                  'rgba(13, 60, 85, 1)',
                  'rgba(13, 60, 85, 1)',
                  'rgba(13, 60, 85, 1)'
              ]
          },
          {
             label: 'Infrastructure',
             data: [{{$data['infra5']}}, {{$data['infra4']}}, {{$data['infra3']}}, {{$data['infra2']}}, {{$data['infra1']}} ],
             backgroundColor: [
                  'rgba(19, 149, 186, 1)',
                  'rgba(19, 149, 186, 1)',
                  'rgba(19, 149, 186, 1)',
                  'rgba(19, 149, 186, 1)',
                  'rgba(19, 149, 186, 1)'

             ],
         },
         {
            label: 'Faculties',
            data: [{{$data['faculty5']}}, {{$data['faculty4']}}, {{$data['faculty3']}}, {{$data['faculty2']}}, {{$data['faculty1']}}],
            backgroundColor: [
                'rgba(241, 108, 32, 1)',
                'rgba(241, 108, 32, 1)',
                'rgba(241, 108, 32, 1)',
                'rgba(241, 108, 32, 1)',
                'rgba(241, 108, 32, 1)'

            ],
        }]

      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
  </script>

@endsection
