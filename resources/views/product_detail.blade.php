@extends('layout.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>{{ $product->title }}</h3>
            <h6>Harga:</h6>
            <p>{{ $currentPrice }}</p>
            <h6 class="mt-4">Deskripsi:</h6>
            <p>{{ $product->description }}</p>
        </div>
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                @foreach($images as $index => $image)
                <div class="carousel-item {{ $index == 0 ? 'active' : ''}}">
                  <img class="d-block w-100" src="{{$image->url}}" alt="{{ $index }} slide">
                </div>
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <div class="col-md-12">
            <h5>Riwayat Harga {{ $product->title }}</h5>
            <canvas id="canvas"></canvas>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
<script src="http://www.chartjs.org/samples/latest/utils.js"></script>
<script>
    var data = <?php echo json_encode($prices); ?>;
    var Time = new Array();
    var Price = new Array();
    data.forEach(function(price){
            Time.push(price.time);
            Price.push(price.price);
        });
    var ctx = document.getElementById('canvas').getContext('2d');
    var myChart = new Chart(ctx, {
              type: 'line',
              data: {
                  labels:Time,
                  datasets: [{
                      label: 'Grafik Harga',
                      data: Price,
                      borderWidth: 1,
                      backgroundColor: 'rgba(0,0,0,0)',
                      borderColor: 'rgba(32, 122, 140, 1)',
                  }]
              },
              options: {
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
</script>
@endsection
