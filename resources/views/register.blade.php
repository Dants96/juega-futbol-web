@extends('layouts.layout_general')
@section('title')
Registrar
@endsection('title')
@section('contenido')

  <!-- Main content -->
  <br>
  <section style="text-align:center">

      <!-- Default box -->
      <div class="card" style="display: inline-block">
        <div class="login-logo">
          <b>Regístrate</b>
        </div>
          <!--aqui inicia el registro de usuarios-->
@if(! $errors->isEmpty() )
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
@endif
<div class="card-body">
<form class="form-group" action="{{route('registrar')}}" method="POST">
      @csrf
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Cédula" name="cedula" required value="{{ old('cedula') }}">
      <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-user"></span>
      </div>
      </div>
      </div>
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Nombre completo" name="user" required value="{{ old('user') }}"> 
      <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-user"></span>
      </div>
      </div>
      </div>
      <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="Correo" name="email" required value="{{ old('email') }}">
      <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
      </div>
      </div>
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Teléfono" name="phone" required value="{{ old('phone') }}">
      <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-phone"></span>
      </div>
      </div>
      </div>
      <div class="input-group mb-3">
      <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
      <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
      </div>
      </div>
      <div class="input-group mb-3">
      <input id="password_confirmation " type="password" class="form-control" placeholder="Confirmar contraseña" name="password_confirmation" required>
      <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-sm">
      <div class="icheck-primary input-group mb-3" style="text-align: left;">
        <label for="agreeTerms">
          <p >
          <input type="checkbox" id="agreeTerms" name="terms" required>
            Estoy de acuerdo con los  <a href="#">terminos y condiciones</a><p>
        </label>
      </div>
      </div>
      </div>
      <!-- /.col -->
      <div class="col-sm">
      <button type="submit" class="btn btn-primary btn-block" style="#width:130%">Registrarse</button>
      </div>
      <!-- /.col -->
      </div>
    </form>
          <!--aqui termina el registro de usuarios-->
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>

  </div>
  </section>
  <!-- Main Footer -->
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
@endsection