@extends('layouts.plantillaNotificaciones2')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @if ($LoggedUserInfo->tipo == 3)
                    <nav class="navbar">

                        <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
                        <a href="#" class="toggle-button">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </a>
                        <div class="navbar-links">

                            <ul>    
                                <li>  <a> @foreach ($usuarios as $usuarios)
                                    {{$usuarios->nombre}}
                                    @endforeach
                                  </a></li> 
                                <li><a class="far fa-bell" href="{{ url('/notificaciones') }}">
                                        <span class="fa fa-comment"></span>
                                        <span class="num"> @if (count($notificaciones) > 0) {{ count($notificaciones) }} @endif

                                        </span>
                                    </a></li>
                                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>


                            </ul>
                        </div>
            </div>
            </nav>
            <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss">
                <div class="cabeceraCssAzul"></div>
                <div class="cabeceraCssAzulClaro"></div>
                <div class="cabeceraCssBlanca"></div>
                <div class="textoCabecera h3">UNIVERSIDAD MAYOR DE SAN SIMON</div>
                <div class="textoCabeceraUniverisdad h3">FACULTAD DE CIENCIAS Y TECNOLOGIA</div>
                <img class="logoUmssCss" src="../../IMAGENES/LogoUMSS.png" alt="">
            </div>
            </head>

            <body>
                <header>


                    <div>
                        <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
                    </div>
                    <nav class="navbar">

                        <div class="brand-title"> 
                            @if($usuarios->tipo==3)
                            ESTUDIANTE
                            @endif
                          </div>
                        <a href="#" class="toggle-button">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </a>
                        <div class="navbar-links">

                            <ul>
                                <li class="nav-item {{ !Route::is('estudiante.inicioE') ?: 'active' }}"><a
                                        href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                                <li class="nav-item {{ !Route::is('estudiante.empresa') ?: 'active' }}"><a
                                        href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                                <li><a href="{{ route('estudiante.documentosBaseView') }}">Documentos base</a></li>
                                <li class="nav-item {{ !Route::is('estudiante.lista') ?: 'active' }}"><a
                                        href="{{ route('estudiante.lista') }}">Lista de empresas</a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Registrar
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{ route('estudiante.fundaempresa') }}">Registrar funda
                                                empresa TIS</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de
                                                pagos</a></li>
                                        <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Registrar
                                                plan de Trabajo</a></li>

                                    </ul>
                                </li>


                            </ul>
                        </div>
        </div>
        </nav>
        <h2>Notificaciones recibidas </h2>

        @endif
        @if ($LoggedUserInfo->tipo == 2)
        <nav class="navbar"  >
            
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              
              <ul>
                <li>  <a> @foreach ($usuarios as $usuarios)
                    {{$usuarios->nombre}}
                    @endforeach
                  </a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
      
            
          </ul>
        </div>
      </div>
      </nav>
          <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss"> 
              <div class="cabeceraCssAzul"></div>
              <div class="cabeceraCssAzulClaro"></div>
              <div class="cabeceraCssBlanca"></div>
              <div class="textoCabecera h3">UNIVERSIDAD MAYOR DE SAN SIMON</div>
              <div class="textoCabeceraUniverisdad h3">FACULTAD DE CIENCIAS Y TECNOLOGIA</div>
              <img class="logoUmssCss" src="../../IMAGENES/LogoUMSS.png" alt="">
          </div>
              </head>
          <body>
              <header>
          
              
              <div>
                  <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
                </div>
      
              <!--MENU NAVBAR  -->
              <nav class="navbar">
                <div class="brand-title"> 
                    @if($usuarios->tipo==2)
                    DOCENTE
                    @endif
                  </div>
                  <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </a>
                  <div class="navbar-links">
                    <ul>
                    
                    <li class="nav-item {{!Route::is('docente.inicioD')?:'active'}}"> <a class="nav-link" href="{{ route('docente.inicioD') }}">Inicio</a></li>
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Publicar
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('docente.convocatoriasD') }}">Convocatoria</a></li>
                        <li><a class="dropdown-item" href="{{ route('docente.avisosD') }}">Aviso</a></li>
                        <li><a class="dropdown-item" href="{{ route('docente.documentosB') }}">Documentos Base</a></li>
                      </ul>
                    </li>
                    <!--<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ver
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="nav-item {{!Route::is('docente.planP')?:'active'}}"><a class="dropdown-item" href="{{ route('docente.planP') }}">Plan de pagos</a></li>
                        <li class="nav-item {{!Route::is('docente.planT')?:'active'}}"><a class="dropdown-item" href="{{ route('docente.planT') }}">Plan de Trabajos</a></li>
                       
                      </ul>
                    </li>-->
                      <li class="nav-item {{!Route::is('docente.lista')?:'active'}}"> <a class="nav-link"href="{{ route('docente.lista') }}">Lista de empresas</a></li>
                      <li class="nav-item {{!Route::is('docente.calendario')?:'active'}}"><a class="nav-link"href="{{ route('docente.calendario') }}">Calendario</a></li>
                      <li class="nav-item {{!Route::is('auth.register')?:'active'}}"><a class="nav-link"href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                      <li><a class="nav-link"href="{{ url('/notificaciones') }}">Enviar Notificacion</a></li>

                    </div>
                </nav>
      
            <h2>Notificaciones enviadas </h2>

        @endif

    </div>

    @if ($LoggedUserInfo->tipo == 2)

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('notificaciones.create') }}" title="Nuevo Mensaje"> <i
                    class="fas fa-plus-circle"></i>
            </a>
        </div>
    @endif
    </div>
    </div>
@endsection
@section('cuerpo')



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <!--<th>No</th>-->
            <th>Mensajes</th>
            <!--<th>Selecionar grupo empresa</th>
                    <th>Selecionar grupo empresa2</th>-->
            <!--aqui era tipo 3-->


        </tr>


        @foreach ($notificaciones as $notificacion)
            <tr>
                <td>{{ $notificacion->mensaje_notificacion }}</td>



            </tr>
        @endforeach


    </table>



@endsection
