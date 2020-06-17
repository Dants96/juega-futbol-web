<!DOCTYPE html>
<html lang="es">
    <head>
        @yield('add-head')
        <title>JuegaFutbol - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">

        <style type="text/css">
            
            .caja {
                margin-left: 5%;
                margin-right: 5%;
            }
            
            footer {
            background: #f8f9fa;
            color:rgba(0,0,0,.5);
            padding-top: 10px;
            width: 100%;
            height: 8%;
            bottom: 0%;
            position: fixed;
            border-top: 1px solid #dee2e6;
            }

            footer .copyright {
            margin-top: 10px;
            font-size: 15px;
            }

            footer .copyright span {
            color: #0894d1;
            }

            .caja-slide{
                height: 80%
            }
            @yield('add-style')
        </style>

    </head>
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-collapse" style="position: fixed; width: 100%">
                <div class="container">
                <a href="{{url('/')}}" class="navbar-brand">
                    <img src="dist/img/icon.svg" alt="Juega Futbol" class="brand-image img-square"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light" style="padding-left: 5px">Juega Futbol</span>
                </a>
                
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="nav navbar-nav  ml-auto">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/contactos')}}" class="nav-link">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/canchas')}}" class="nav-link">Canchas</a>
                    </li>
                    @if ( Auth::guest() )
                        <li class="nav-item">
                            <a href="{{url('/acceder')}}" class="nav-link">Ingresar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/registrar')}}" class="nav-link">Registrarse</a>
                    @else
                        <li class="nav-item">
                            <a href="{{url('/misreservas')}}" class="nav-link">Mis Reservas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()-> nom_cli}} <span class="caret"></span><!--fallo probable-->
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{ url('/perfil') }}">Perfil</a>
                                    <a class="nav-link" href="{{ route('salir') }}" onclick="event.preventDefault(); document.getElementById('salir-form').submit();">Salir</a>
                                    <form id="salir-form" action=" {{route('salir')}} " method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    <form>
                            <div>
                        </li>
                    @endif

                    </li>
                    </ul>
                </div>
            </nav>

            <br>
            <br>
            @yield('contenido')
        </div>

        <!--footer, no me gusta como se ve aun
        <footer>
            <div class="copyright text-center">
              JuegaFutbol &copy;  2020 <span>Mira Reserva Juega !</span>
            </div>
          </footer>
        -->
    </body>

    <!--<body class="hold-transition layout-top-nav">
        <div class="wrapper"> -->
</html>

