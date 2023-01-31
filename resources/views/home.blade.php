@extends('layouts.main')

@section('content')
<div class="content-wrapper">
<div class="container p-4">
    <div class="columns">
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$requests->count()}}</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{url('/')}}/currentorder" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$accepted->count()}}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Accepted Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('/')}}/acceptedorder" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$cancelled->count()}}</h3>
    
                  <p>Cancelled Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{url('/')}}/cancelledorder" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 style="color: white">{{$users->count()}}</h3>
    
                  <p style="color: white">Potential Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer" style="font-weight: bold">User Registered on Application</a>
              </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="">
            <canvas id="myChart" width="200" height="500"></canvas>
        </div>

    </div>
</div>
</div>
<script>
  const ctx = document.getElementById('myChart');
  
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Accepted', 'Cancelled', 'Pending'],
      datasets: [{
        label: 'Order Details',
        data: [{{$accepted->count()}}, {{$cancelled->count()}}, {{$pending->count()}}],
        borderWidth: 1,
        radius: 200
      }]
      
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  </script>
@endsection



