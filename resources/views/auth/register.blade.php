<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docente</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/App.css">
    <link rel="stylesheet" href="../CSS/iconos.css">
    <link rel="stylesheet" href="../CSS/nav.css">  
    <link rel="stylesheet" href="../CSS/fondos.css"> 
    <link rel="stylesheet" href="../CSS/cabecera.css"> 
    <script src="../CSS/script.js" defer></script>
    <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss"> 
        <div class="cabeceraCssAzul"></div>
        <div class="cabeceraCssAzulClaro"></div>
        <div class="cabeceraCssRoja"></div>
        <div class="cabeceraCssRojoClaro"></div>
        <div class="cabeceraCssBlanca"></div>
        <div class="textoCabecera h3">INFORMATICA - SISTEMAS</div>
        <div class="textoCabeceraUniverisdad h3">UNIVERSIDAD MAYOR DE SAN SIMON</div>
        <img class="logoUmssCss" src="../IMAGENES/LogoUMSS.png" alt="">
        <img class="logoCarreraCss" src="../IMAGENES/logoInformaticaSistemas.png" alt="">
    </div>
</head>
<header>
    
        <title>INICIO</title>
        <div>
            <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
          </div>
          <nav class="navbar">
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="{{ url('/docente/dashboard') }}">Inicio</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
</header>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Registro de estudiantes</h4><hr>
           <div id="wrapper">
            <form method="post" action="{{ route('auth.save') }}" accept=".csv" enctype="multipart/form-data">
            @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
            @endif
            @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
            @endif
            @csrf
            <input type="file" name="file"/>
            <input type="submit" name="submit_file" value="Submit"/>
            </form>
           </div>
           <!--<form action="{{ route('auth.save') }}" method="post">

           @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif

           @csrf
           <div class="form-group">
                 <label>Nombre</label>
                 <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Ingrese su email" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Contraseña</label>
                 <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Registrar</button>
              <br>              
           </form>-->
      </div>
   </div>
</div>
    
</body>
<footer class="footer text-white">
            <div class="container">
              <nav class="row">
    
    
                <a class="col-sm-6 text-reset text-uppercase d-flex align-items-center">
                 <!--  {/*   <img src={icono} class="img-logo mr-2"></img> */} -->
                  <div >
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
                   <!--  {/*
    <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
    <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
    */}
     -->
                  </ul>
    
    
                </ul>
              </nav>
    
            </div>
          </footer>
</html>
