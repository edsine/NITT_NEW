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
<p>Nnamdi Azikwe Airport</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="{{ route('nnamdi') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box bg-success">
<div class="inner">
<h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
<p>Akure Airport</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="{{ route('akure') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box bg-warning">
<div class="inner">
<h3>{{ \App\Models\CargoApapa::count() }}</h3>
<p>Benin Airport</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="{{ route('benin') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-2 col-4">

<div class="small-box bg-danger">
<div class="inner">
<h3>{{ \App\Models\CargoCalabar::count() }}</h3>
<p>Margeret Epko Airport</p>
</div>
<div class="icon">
<i class=""></i>
</div>
<a href="{{ route('margeret') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>



<div class="col-lg-2 col-4">

  <div class="small-box bg-secondary">
  <div class="inner">
  <h3>{{ \App\Models\CargoApapa::count() }}</h3>
  <p>Akanu Ibiam Airport</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="{{ route('akanu') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>

  
<div class="col-lg-2 col-4">

  <div class="small-box bg-primary">
  <div class="inner">
  <h3>{{ \App\Models\CargoApapa::count() }}</h3>
  <p>Ibadan Airport</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="{{ route('ibadan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>



</div>


<section class="content">
  <div class="container-fluid">
  
  <div class="row">
  <div class="col-lg-2 col-4">
  
  <div class="small-box bg-info">
  <div class="inner">
  <h3>{{ \App\Models\CargoDelta::count() }}</h3>
  <p>Ilorin Airport</p>
  </div>
  <div class="icon">
  <i class=""></i>
  </div>
  <a href="{{ route('ilorin') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  
  
<div class="col-lg-2 col-4">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
    <p>Yakubu Gowon Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('yakubu') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-2 col-4">
    
    <div class="small-box bg-warning">
    <div class="inner">
    <h3>{{ \App\Models\CargoApapa::count() }}</h3>
    <p>Kaduna Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('kaduna') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-2 col-4">
    
    <div class="small-box bg-danger">
    <div class="inner">
    <h3>{{ \App\Models\CargoCalabar::count() }}</h3>
    <p>Sultan Saddika Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('sultan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    
    
    <div class="col-lg-2 col-4">
    
      <div class="small-box bg-secondary">
      <div class="inner">
      <h3>{{ \App\Models\CargoApapa::count() }}</h3>
      <p>Mallam Aminu Airport</p>
      </div>
      <div class="icon">
      <i class=""></i>
      </div>
      <a href="{{ route('mallam') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>
    
      
    <div class="col-lg-2 col-4">
    
      <div class="small-box bg-primary">
      <div class="inner">
      <h3>{{ \App\Models\CargoApapa::count() }}</h3>
      <p>Maiduguri Airport</p>
      </div>
      <div class="icon">
      <i class=""></i>
      </div>
      <a href="{{ route('maiduguri') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
    <p>Makurdi Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('makurdi') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-2 col-4">
    
    <div class="small-box bg-success">
    <div class="inner">
    <h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
    <p>Murtala Mohammed Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('murtala') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-2 col-4">
    
    <div class="small-box bg-warning">
    <div class="inner">
    <h3>{{ \App\Models\CargoApapa::count() }}</h3>
    <p>PortHarcourt Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('portharcourt') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-2 col-4">
    
    <div class="small-box bg-danger">
    <div class="inner">
    <h3>{{ \App\Models\CargoCalabar::count() }}</h3>
    <p>Yola Airport</p>
    </div>
    <div class="icon">
    <i class=""></i>
    </div>
    <a href="{{ route('yola') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    
    
    <div class="col-lg-2 col-4">
    
      <div class="small-box bg-secondary">
      <div class="inner">
      <h3>{{ \App\Models\CargoApapa::count() }}</h3>
      <p>Minna Airport</p>
      </div>
      <div class="icon">
      <i class=""></i>
      </div>
      <a href="{{ route('minna') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>
    
      
    <div class="col-lg-2 col-4">
    
      <div class="small-box bg-primary">
      <div class="inner">
      <h3>{{ \App\Models\CargoApapa::count() }}</h3>
      <p>Katsina Airport</p>
      </div>
      <div class="icon">
      <i class=""></i>
      </div>
      <a href="{{ route('katsina') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
      <p>Sam Mbakwe Airport</p>
      </div>
      <div class="icon">
      <i class=""></i>
      </div>
      <a href="{{ route('samMbakwe') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>
      
      <div class="col-lg-2 col-4">
      
      <div class="small-box bg-success">
      <div class="inner">
      <h3>{{ \App\Models\GrossDomesticProductPercent::count() }}</h3>
      <p>Osubi Airport</p>
      </div>
      <div class="icon">
      <i class=""></i>
      </div>
      <a href="{{ route('osubi') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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