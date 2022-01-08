<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/App.css">
    <link rel="stylesheet" href="../CSS/iconos.css">
    <link rel="stylesheet" href="../CSS/nav.css">  
    <link rel="stylesheet" href="../CSS/fondos.css"> 
    <link rel="stylesheet" href="../CSS/cabecera.css"> 
    <link rel="stylesheet" href="../CSS/formulario.css"> 
    <link rel="stylesheet" href="../CSS/nav2.css"> 
    <script src="../CSS/script.js" defer></script>
    <script src="../CSS/borrar.js" defer></script>
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
            Usuario docente: {{$usuarios->nombre}}
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

    </header>

    <!--publicaciones y avisos -->
    @yield('cuerpo')
    <!-- PIE DE CABECERA -->
    <footer class="footer text-white">
        <div class="container">
            <nav class="row">


                <a class="col-sm-6 text-reset text-uppercase d-flex align-items-center">

                    <div>
                        <h2>
                            CONTACTOS
                        </h2>
                        <p>Telefono:(+591)75929577 </p>
                        <p>Email:lion.tech05@gmail.com</p>
                    </div>
                </a>
                <ul class="col-sm-6 list-unstyled redes-container ">
                    <h2>
                        REDES SOCIALES
                    </h2>

                    <ul>
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>

                    </ul>


                </ul>
            </nav>

        </div>
    </footer>


</body>

</html>
