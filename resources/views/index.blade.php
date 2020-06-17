@extends('layouts.layout_general')
@section('title', 'Inicio')
@section('add-head')
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
/* Make the image fully responsive */
.carousel-inner img {
  width: 100%;
  height: 619px;
}

.carousel-caption h3 {
  background-color: rgba(100, 149, 237, 0.9);
  color: black;
  font-size: 4rem;
  margin-bottom: 0;
  padding-top: 10px;
  padding-bottom: 10px;
}


.carousel-caption p{
  margin-bottom: 30%;
  background-color: rgba(100, 149, 237, 0.7);
  color: #fff;
  font-size: 2rem;
}

.shadow{
  text-shadow : white 0px 2px 14px;
}

</style>

@endsection

@section('contenido')

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img-home.jpg" alt="welcome" width="1100" height="600">
      <div class="carousel-caption">
        <h3><b>Bienvenido a <span class="shadow">Juega Futbol</span></b></h3>
        <p> tu sitio web para ver y reservar canchas de futbol en pasto</p>
      </div>   
    </div>

    @if ( Auth::guest() )
      <div class="carousel-item">
      <img src="image/img-home2.webp" alt="Chicago" width="1100" height="600">
      <div class="carousel-caption">
      <a href="{{url('/registrar')}}"><h3><b>Registrate ya!  es gratis</b></h3>
        <p>registrate aqui  para poder reservar tus canchas</p></a>
      </div>   
    </div> 
    @else
    <div class="carousel-item">
      <img src="image/img-home2.webp" alt="Chicago" width="1100" height="600">
      <div class="carousel-caption">
      <a href="{{url('/misreservas')}}"><h3><b>tenemos tus reservas</b></h3>
        <p>organiza tu calendario y mira tu cronograma de partidos 
        </p></a>
      </div>   
    </div>

    @endif

    <div class="carousel-item">
      <img src="image/img-home3.jpg" alt="New York" width="1100" height="600">
      <div class="carousel-caption">
      <a href="{{url('/canchas')}}"><h3><b>Catalogo de Canchas</b></h3>
        <p>hay canchas de todo tipo, tamaño y color, reserva la que más te guste</p></a>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


@endsection