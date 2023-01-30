<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRINT IT</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts.header')

@include('layouts.sidebar')

@yield('content')

@include('layouts.footer')




</body>
<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Red', 'Blue', 'Yellow'],
    datasets: [{
      label: 'Order Details',
      data: [12, 19, 3],
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
  // var pieData = [
  //     {
  //         value: 20,
  //         color:"#878BB6"
  //     },
  //     {
  //         value : 40,
  //         color : "#4ACAB4"
  //     },
  //     {
  //         value : 10,
  //         color : "#FF8153"
  //     },
  //     {
  //         value : 30,
  //         color : "#FFEA88"
  //     }
  // ];
  // // Get the context of the canvas element we want to select
  // var countries= document.getElementById("countries").getContext("2d");
  // new Chart(countries).Pie(pieData);
</script>
</html>
