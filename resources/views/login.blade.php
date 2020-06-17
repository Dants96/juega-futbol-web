@extends('layouts.layout_general')

@section('title', 'Acceder')
@section('add-style')
    .card{
      width: 30rem;
    }
@endsection

@section('contenido')
  <br>
  <br>
  <br>
  <section style="text-align:center">
    <div class="card col-12 col-sm-12 col-md-6" style="display: inline-block">
    <div class="card-body login-card-body">
      <div class="login-logo">
        <b>Iniciar Sesion</b>
      </div>
      
      @if(! $errors->isEmpty() )
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
      </div>
      @endif
      
      <form action="{{route('acceder_post')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input name="email_cli" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4" style="position: absolute; right: 10%; width: 100%">
            <button type="submit" class="btn btn-primary btn-block" >Ingresa</button>
          </div>
          <!-- /.col -->
          <br>
          <br>
        </div>
      </form>
      
      <!-- /.social-auth-links -->
      <div>
      <p class="mb-1" style="text-align: left">
      <a href="{{url('contactos')}}" onclick="alert('Para recuperar tu contraseña por favor contactate con nosotros')">Olvide mi contraseña</a>
      </p>
      <p class="mb-0" style="text-align: left">
        <a href="{{url('registrate')}}" class="text-center">Registrarse</a>
      </p>
      </div>

    </div>
  </div>
  
  </div>
  </section>
</div>

<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./dist/js/adminlte.min.js"></script>

@endsection

