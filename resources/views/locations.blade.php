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
      type: 'horizontalBar',
      data: {
          labels: [
            "Bapunagar", "Kalupur", "Shahibaug", "Bodakdev", "Maninagar", "Vastrapur", "Ambawadi", "Ellis Bridge", "Navrangpura", "Naranpura",
            "Naroda", "Paldi", "Bopal", "Ranip", "Gota", "Sarkhej", "Vasna", "Vejalpur", "C. G. Road", "Law Garden", "Lal Darwaja",
            "Satellite", "Motera", "Chandkheda", "Odhav", "Sabarmati", "Gulbai Tekra", "Memnagar", "Shahpur", "Thaltej"],
          datasets: [{
              label: '# of institutes',
              data: [
                {{$data['Bapunagar']}}, {{$data['Kalupur']}}, {{$data['Shahibaug']}}, {{$data['Bodakdev']}}, {{$data['Maninagar']}}, {{$data['Vastrapur']}},
                {{$data['Ambawadi']}}, {{$data['Ellis Bridge']}}, {{$data['Navrangpura']}}, {{$data['Naranpura']}}, {{$data['Naroda']}}, {{$data['Paldi']}},
                {{$data['Bopal']}}, {{$data['Ranip']}}, {{$data['Gota']}}, {{$data['Sarkhej']}}, {{$data['Vasna']}}, {{$data['Vejalpur']}},
                {{$data['C. G. Road']}}, {{$data['Law Garden']}}, {{$data['Lal Darwaja']}}, {{$data['Satellite']}}, {{$data['Motera']}}, {{$data['Chandkheda']}},
                {{$data['Odhav']}}, {{$data['Sabarmati']}}, {{$data['Gulbai Tekra']}}, {{$data['Memnagar']}}, {{$data['Shahpur']}}, {{$data['Thaltej']}}
              ],

              backgroundColor: [
                  'rgba(241, 108, 32, 1)',
                  'rgba(202, 219, 42, 1)',
                  'rgba(109, 200, 191, 1)',
                  'rgba(247, 142, 35, 1)',
                  'rgba(0, 166, 82, 1)',
                  'rgba(1, 173, 221, 1)',
                  'rgba(10, 208, 108, 1)',
                  'rgba(10, 208, 108, 1)',
                  'rgba(253, 184, 19, 1)',
                  'rgba(203, 220, 214, 1)',
                  'rgba(254, 242, 0, 1)',
                  'rgba(102, 46, 145, 1)',
                  'rgba(237, 0, 140, 1)',
                  'rgba(37, 94, 0, 1)',
                  'rgba(46, 49, 146, 1)',
                  'rgba(177, 52, 46, 1)',
                  'rgba(216, 214, 236, 1)',
                  'rgba(177, 126, 9, 1)',
                  'rgba(52, 204, 153, 1)',
                  'rgba(203, 140, 131, 1)',
                  'rgba(153, 0, 204, 1)',
                  'rgba(1, 102, 255, 1)',
                  'rgba(237, 193, 156, 1)',
                  'rgba(153, 153, 153, 1)',
                  'rgba(222, 179, 67, 1)',
                  'rgba(205, 255, 254, 1)',
                  'rgba(103, 147, 62, 1)',
                  'rgba(74, 15, 1, 1)',
                  'rgba(140, 67, 35, 1)',
                  'rgba(245, 92, 0, 1)'
              ]
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
