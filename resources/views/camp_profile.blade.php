@extends('master')
@section('logo')
<div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nombre Usuario</a>
        </div>
@endsection('logo')
@section('title')
Nombre de el local
@endsection('title')
@section('titlesec')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil de la cancha</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
              <li class="breadcrumb-item active">canchas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
@endsection('titlesec')
@section('colapse')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-square"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nombre local</h3>

                <p class="text-muted text-center">Propietario</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Numero de canchas</b> <a class="float-right">5</a>
                  </li>
                  <li class="list-group-item">
                    <b>Telefono</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>horarios de atencion:</b> <a class="float-right">5:00Am a 11:00 Pm</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Reservas</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informacion</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Direccion</strong>

                <p class="text-muted">Dirreccion cancha</p>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Tenemos tres canchas cubiertas con cesped sintetico las medias son xxaadsa</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection('colapse')