<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../CSS/App.css">
    <link rel="stylesheet" href="../../CSS/iconos.css">
    <link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/fondos.css">
    <link rel="stylesheet" href="../../CSS/cabecera.css">
    <link rel="stylesheet" href="../../CSS/formulario.css">
    <link rel="stylesheet" href="../../CSS/nav2.css">
    <script src="../CSS/script.js" defer></script>
    <nav class="navbar">

        <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">

            <ul>
                <li> <a>
                        @foreach ($usuarios as $usuarios)
                            {{ $usuarios->nombre }}
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
        <img class="logoUmssCss" src="../../IMAGENES/LogoUMSS.png" alt="">
    </div>
</head>

<body>
    <header>


        <div>
            <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
        </div>
          <nav class="navbar " >
            
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
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
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('estudiante.fundaempresa') }}">Registrar funda empresa TIS</a></li>
            <li><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de pagos</a></li>
            <li><a class="dropdown-item" href="{{ route('planTrabajos.create') }}">Registrar plan de Trabajo</a></li>
           
          </ul>
        </li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
        </div>
      </div>
      </nav>
    </header>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Plan de Pagos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pagos.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <!--@if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif-->
    <div class="formPlanT">
    <form action="{{ route('pagos.update', $pago->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado del Proyecto:</strong>
                    <input required type="text" name="estado_del_proyecto" value="{{ $pago->estado_del_proyecto }}" class="form-control" placeholder="Estado del Proyecto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Entregable:</strong>
                    <textarea class="form-control" style="height:200px" name="entregable"
                        placeholder="Entregable">{{ $pago->entregable }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de Entrega:</strong>
                    <input required type="date" name="fecha_de_entrega" class="form-control" placeholder="{{ $pago->fecha_de_entrega }}"
                        value="{{ $pago->fecha_de_entrega }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Porcentaje:</strong>
                    <input required type="text" name="porcentaje" class="form-control" placeholder="{{ $pago->porcentaje }}"
                        value="{{ $pago->porcentaje }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Costo(BS):</strong>
                    <input required type="number" step="0.01" name="costo" class="form-control" placeholder="{{ $pago->costo}}"
                        value="{{ $pago->costo }}">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary" style="background-color: #215f88;margin-top: 50px;">Guardar</button>
            </div>
        </div>

    </form>
</div>
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

