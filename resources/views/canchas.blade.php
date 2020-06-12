@extends('layouts.layout_general')
@section('title', 'Catalogo')
@section('contenido')
<br>
      <div class="container-fluid" style="padding-left: 5%; padding-right: 5%">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Canchas Disponibles</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
      <div class="card card-solid caja" >
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
          @php ($cont = 0)

          @isset($canchas)
          @foreach($canchas as $cancha )
          
            @php ($modale = "")
            @php ($cont = $cont + 1 )
            @php($modal = 'modal' . $cont)
            @php($modale = "#".$modal)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  <h2 class="lead"><b>{{$cancha -> nom_loc}}</b></h2>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <p class="text-muted text-sm">{{$cancha -> nom_pro}}</p>
                      <p class="text-muted text-sm"><b>Numero de jugadores: </b>{{$cancha -> nom_jug}}</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Dirección: {{$cancha -> direccion }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono#: {{$cancha -> telefono}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{$cancha -> img_url}}" alt="" class="img-square img-fluid" data-toggle="modal" data-target="{{$modale}}">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="{{route('reservar.listar', $cancha->id_cancha)}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-clock"></i> Horarios
                    </a>
                    <a href="#" class="btn btn-sm btn-secondary">
                      <i class="fas fa-user"></i> ver cancha
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!------------------------------------------------------>

          <div class="modal fade" id="{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button id="$btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{$cancha -> img_url}}" alt="" class="img-square img-fluid">
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          No Hay Canchas Lo Sentimos
          @endisset
          <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
          <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
@endsection