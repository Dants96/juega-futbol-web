@extends('layouts.layout_general')
@section('title', 'Mis Reservas')
@section('contenido')
<br>
<div class="card card-solid caja">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Cancha Sintetica American Futbol</h3>
              <div class="col-12">
                <img src="image/img14.jpg" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="image/img14.jpg" alt="canchas imagen"></div>
                <div class="product-image-thumb" ><img src="image/img12.jpg" alt="imagen canchas"></div>
                <div class="product-image-thumb" ><img src="image/img13.jpg" alt="imagen canchas"></div>
                <div class="product-image-thumb" ><img src="image/img14.jpg" alt="imagen canchas"></div>
                <div class="product-image-thumb" ><img src="image/img15.jpg" alt="imagen canchas"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Canch las americas</h3>
              <p>
                Ubicada en el centro de la ciudad.
              </p>

              <hr>
              <h4>Descripcion</h4>
              <p>
                Medidas reglamentarias, Perfecta iluminación, Techada, Tienda de Refrigerio y Zona de parqueo vigilado.

              </p>
  

              <h4 class="mt-3">Tamaño de la cancha <small>x M9 </small></h4>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  $50.000
                </h2>
                <h4 class="mt-0">
                  <small>Dos Horas $90.000 </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-telephone-plus fa-lg mr-2"></i> 
                  Reserve
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i> 
                  Calificar
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
            </nav>
            
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
@endsection