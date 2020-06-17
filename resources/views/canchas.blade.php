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


<div class="card card-solid caja">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
            <!--carta-->

            @php $out_c = ['id' => '', 'negocio' => '', 'dir' => '', 'tel' => '', 'noj' =>'', 'tech' => '']; @endphp
            @foreach ($canchas as $cancha)
            @php $out_c['id'] = $cancha->id_cancha; @endphp
            @foreach ($locales as $local)
            @if ($local->id_loc == $cancha->local)
            @php $out_c['negocio'] = $local->nom_loc; @endphp
            @php $out_c['dir'] = $local->dir_loc; @endphp
            @php $out_c['tel'] = $local->tel_loc; @endphp
            @endif
            @endforeach
            @foreach ($tipos as $tipo)
            @if ($tipo->id_tipo == $cancha->tipo)
            @php $out_c['noj'] = $tipo->num_jug; @endphp
            @php $out_c['tech'] = $tipo->techo; @endphp
            @endif
            @endforeach

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">
                        <h2 class="lead"><b>{{strtoupper ($out_c['negocio'])}}</b></h2>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <p class="text-muted text-sm"><b>Numero de cancha: {{$out_c['id']}}</b></p>
                                <p class="text-muted text-sm"><b>No de jugadores: </b>{{$out_c['noj']}}</p>
                                <p class="text-muted text-sm"><b>Techada: </b>{{$out_c['tech']}}</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-building"></i></span><b> Dirección:
                                        </b>{{$out_c['dir']}}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>
                                            Telefono#:</b>{{$out_c['tel']}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="image/cancha ejemplo.jpg" alt="" class="img-square img-fluid"
                                    data-toggle="modal" data-target="#modal1">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm btn-primary">
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
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="image/cancha ejemplo.jpg" alt="" class="img-square img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--fin carta-->
        </div>
    </div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
@endsection