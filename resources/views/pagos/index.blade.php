<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/App.css">
    <link rel="stylesheet" href="CSS/iconos.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/fondos.css">
    <link rel="stylesheet" href="CSS/cabecera.css">
    <link rel="stylesheet" href="CSS/formulario.css">
    
    <script src="CSS/active.js" defer></script>
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
            <li><a class="far fa-bell" href="{{ url('/notificaciones') }}">
              <span class="fa fa-comment"></span>
              <span class="num">@if(count($notificaciones)>0) {{count($notificaciones)}} @endif
              
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
        <img class="logoUmssCss" src="IMAGENES/LogoUMSS.png" alt="">

    </div>
</head>

<body >
    <header>
        <div>
            <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
        </div>
<title>Registrar Plan de pagos</title>
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
                <li  class="nav-item {{!Route::is('estudiante.inicioE')?:'active'}}"><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                <li><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                <li><a href="{{ route('estudiante.documentosBaseView') }}">Documentos base</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Registrar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ route('estudiante.fundaempresa') }}">Registrar funda empresa TIS</a></li>
                      <li class="nav-item {{!Route::is('pagos.index')?:'active'}}"><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de pagos</a></li>
                      <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Registrar plan de Trabajo</a></li>
                     
                    </ul>
                  </li>
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                
            
               
            
          </ul>
            </div>
          </nav>
    @foreach ($empresas as $empresa)
    @if(@$usuario_empresa->emp && @$usuario_empresa->emp== $empresa->id || $LoggedUserInfo->tipo==2)
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Grupo Empresa {{$empresa->nombreL}}: Registro Plan de Pagos </h2>
            </div>
            @if ($LoggedUserInfo->tipo==3)
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pagos.create') }}" title="Crear un pago"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
            @endif
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Estado del Proyecto</th>
            <th>Entregable</th>
            <th>Fecha de Entrega</th>
            <th>Porcentaje</th>
            <th>Costo(BS.)</th>
            @if ($LoggedUserInfo->tipo==3)
            <th width="280px">Acción</th>
            @endif

        </tr>
        @foreach ($pagos as $pago)
        @if((@$usuario_empresa->emp==@$pago->id_empresa || $LoggedUserInfo->tipo==2) && @$pago->id_empresa == $empresa->id)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pago->estado_del_proyecto }}</td>
                <td>{{ $pago->entregable }}</td>
                <td>{{ $pago->fecha_de_entrega}}</td>
                <td>{{ $pago->porcentaje}}</td>
                <td>{{ $pago->costo }}</td>
                @if ($LoggedUserInfo->tipo==3)
                <td>
                    
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">

                        <a href="{{ route('pagos.show', $pago->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('pagos.edit', $pago->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
                @endif

            </tr>
            @endif
        @endforeach
    </table>
    @endif
    @endforeach

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
