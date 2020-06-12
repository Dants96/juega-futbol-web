@extends('master')
@section('sources')

@endsection('sources')
@section('logo')
<div class="image">
          <img src="dist/img/usuario-registrados.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @isset($user)
              <a href="#" class="d-block">{{$user}}</a>
          @else
              <a href="#" class="d-block">{{'Invitado'}}</a>
          @endisset()
        </div>
@endsection('logo')
@section('title')
Vista de canchas
@endsection('title')
@section('titlesec')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @isset($field)
              <h1>{{$field}}</h1>
            @else
              <h1>{{'Cancha no selecionada'}}</h1>
            @endisset
          </div>
@endsection('titlesec')
@section('colapse')
<!--requerimientos
id cancha
id usuario
hora 
fecha
reservas para el dia dispuesto
-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> %Usuario Reserva la cancha</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampledate">Selecione dia partido</label>
                    <input type="date" name="fecha" class="form-control" id="exampledate" placeholder="Fecha">
                  </div>
                  <div class="form-group">
                    <label for="cars">hora del partido:</label>
                        <select id="cars" name="hora" form="quickForm">
                            <option value="7:00">7:00 AM</option>
                            <option value="8:00">8:00 AM</option>
                            <option value="9:00">9:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="22:00">10:00 PM</option>             
                        </select>
                   </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Reservar</button>
                  <button type="submit" class="btn btn-danger">Paridos</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
                     <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
                    
                   <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">Reservas hechas</a>
                    @for ($i = 0; $i < 10; $i++)
                      <a class="list-group-item list-group-item-action disabled"  tabindex="-1" aria-disabled="true">2:00 PM Reserva de partido</a>
                    @endfor
                    </div>

            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection('colapse')
@section('source_script')

@endsection('source_script')