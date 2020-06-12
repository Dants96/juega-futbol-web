@extends('layouts.layout_general')
@section('title', 'Mis Reservas')
@section('contenido')
<br>
      <section>
      <div class="container-fluid caja">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis Reservas</h1>
          </div>

        </div>
      </div>
      </section>
      <div class="card card-primary caja" >                    
              <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action active">Reservas hechas</a>
              @isset($schedules)
              @foreach($schedules as $schedule )
                <a class="list-group-item list-group-item-action disabled"  tabindex="-1" aria-disabled="true">{{$schedule -> hora_res}} PM {{$schedule -> fecha_res}}  partido <button class="btn btn-danger">Cancelar</button>
              @endforeach
              @else
                La cancha no dispone de partidos
              @endisset
              </div>
      </div>
      <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
@endsection