@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')





<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<br/>
<br/>






<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-2 col-4">

<div class="small-box bg-info">
<div class="inner">
<h3>{{ \App\Models\GrossDomesticProductBillion::count() }}</h3>
<p>Traffic Crashes 1960-2022</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box bg-success">
<div class="inner">
<h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
<p>2006 (RTC) </p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box bg-warning">
<div class="inner">
<h3>{{ \App\Models\CargoApapa::count() }}</h3>
<p>2008 (RTC)</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box bg-danger">
<div class="inner">
<h3>{{ \App\Models\CargoCalabar::count() }}</h3>
<p>2009 (RTC)</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>



<div class="col-lg-2 col-4">

  <div class="small-box bg-secondary">
  <div class="inner">
  <h3>{{ \App\Models\CargoApapa::count() }}</h3>
  <p>2010 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>

  
<div class="col-lg-2 col-4">

  <div class="small-box bg-primary">
  <div class="inner">
  <h3>{{ \App\Models\CargoApapa::count() }}</h3>
  <p>2011 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>



</div>



<section class="content">
  <div class="container-fluid">
  
  <div class="row">
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-info">
  <div class="inner">
  <h3>{{ \App\Models\GrossDomesticProductBillion::count() }}</h3>
  <p>2012 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-success">
  <div class="inner">
  <h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
  <p>2013 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-warning">
  <div class="inner">
  <h3>{{ \App\Models\CargoApapa::count() }}</h3>
  <p>2014 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-danger">
  <div class="inner">
  <h3>{{ \App\Models\CargoCalabar::count() }}</h3>
  <p>2015 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  
  
  <div class="col-lg-2 col-4">
  
    <div class="small-box bg-secondary">
    <div class="inner">
    <h3>{{ \App\Models\CargoApapa::count() }}</h3>
    <p>2016 (RTC)</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
  
    
  <div class="col-lg-2 col-4">
  
    <div class="small-box bg-primary">
    <div class="inner">
    <h3>{{ \App\Models\CargoApapa::count() }}</h3>
    <p>2017 (RTC)</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
  
  

  
  
  </div>

  

<section class="content">
  <div class="container-fluid">
  
  <div class="row">
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-info">
  <div class="inner">
  <h3>{{ \App\Models\GrossDomesticProductBillion::count() }}</h3>
  <p>2018 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-success">
  <div class="inner">
  <h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
  <p>2019 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-warning">
  <div class="inner">
  <h3>{{ \App\Models\CargoApapa::count() }}</h3>
  <p>2020 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-danger">
  <div class="inner">
  <h3>{{ \App\Models\CargoCalabar::count() }}</h3>
  <p>2021 (RTC)</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  
  
  <div class="col-lg-2 col-4">
  
    <div class="small-box bg-secondary">
    <div class="inner">
    <h3>{{ \App\Models\CargoApapa::count() }}</h3>
    <p>2022 (RTC)</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
  
   
  
  

  
  
  </div>
  
  </div>



  
  





   



@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js') 
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop