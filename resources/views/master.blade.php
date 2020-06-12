<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  @yield('sources')
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/style.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="{{url('/')}}"><i class="fas fa-bars"></i></a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block" en el caso que no se requiera uno de los iconos-->
      <li class="nav-item d-true d-sm-inline-block">
        <a href="{{url('/canchas')}}" class="nav-link">Canchas</a>
      </li>
      <li class="nav-item  d-sm-inline-block">
        <a href="{{url('/misreservas')}}" class="nav-link">Mis reservas</a>
      </li>
      <li class="nav-item  d-sm-inline-block">
        <a href="{{url('/partidos')}}" class="nav-link">Mis partidos</a>
      </li>
    </ul>
    <!--activar si se va buscar canchas-->
    <!--SEARCH FORM -->
 <!--    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-slide="true" href="{{url('/')}}"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link">
      <img src="dist/img/icon.svg"
           alt="JuegaFutbol Logo"
           class="brand-image img-square "
           style="opacity: .8"
           height="40px" 

           >
      <span class="brand-text font-weight-light">Logo Canchas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @yield("logo")
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('titlesec')
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
           @yield('colapse')
        
        <div class="card-body">

          <!--inicio formulario--->
          {{csrf_field()}}
        
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!--img src="imagens/footer.jpg" id="footer_Bottom"-->
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2-pre
    </div>
    <strong>Copyright &copy; 2020-2021 <a href=""></a>.</strong>Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- javascript -->
@yield('source_script')
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
