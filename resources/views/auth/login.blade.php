<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/App.css">
    <link rel="stylesheet" href="CSS/iconos.css">  
    <link rel="stylesheet" href="CSS/nav.css">  
    <link rel="stylesheet" href="CSS/fondos.css">  
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/cabecera.css"> 
    <script src="CSS/script.js" defer></script>
    <title>iniciarsesion</title>
    <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss"> 
      <div class="cabeceraCssAzul"></div>
      <div class="cabeceraCssAzulClaro"></div>
      <!-- <div class="cabeceraCssRoja"></div> -->
      <!-- <div class="cabeceraCssRojoClaro"></div> -->
      <div class="cabeceraCssBlanca"></div>
      <div class="textoCabecera h3">UNIVERSIDAD MAYOR DE SAN SIMON</div>
      <div class="textoCabeceraUniverisdad h3">FACULTAD DE CIENCIAS Y TECNOLOGIA</div>
      <img class="logoUmssCss" src="IMAGENES/LogoUMSS.png" alt="">
      <!-- <img class="logoCarreraCss" src="IMAGENES/logoInformaticaSistemas.png" alt="">
   -->
    </div>
</head>
<body>
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
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="#" class="active">Iniciar Sesión</a></li>
            
          </ul>
        </div>
      </nav>
</header>

<div class="container">
   <div class="row justify-content-center pt-5 mt-5 m-1 caja">
      <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
           <h4 style="color:black">Iniciar sesión</h4><hr>
           <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label style="color:black">Usuario</label>
                 <input type="text" class="form-control" name="username" placeholder="Ingrese su email" value="{{ old('username') }}">
                 <span class="text-danger">@error('required'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label style="color:black">Contraseña</label>
                 <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Iniciar sesion</button>
              <br>              
           </form>
      </div>
   </div>
</div>

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
    <!--   {/* <ul class="col-3 list-unstyled">
        <li class=" font-weight-bold text-uppercase">resource
        </li>
        <li><a href="#" class="text-reset">Link 1</a></li>
        <li><a href="#" class="text-reset">Link 2</a></li>
        <li><a href="#" class="text-reset">Link 3</a></li>
        <li><a href="#" class="text-reset">Link 4</a></li>
        <li><a href="#" class="text-reset">Link 5</a></li>
      </ul> */}
      {/* <ul class="col-3 list-unstyled">
        <li class=" font-weight-bold text-uppercase">quick links
        </li>
        <li><a href="#" class="text-reset">Link 1</a></li>
        <li><a href="#" class="text-reset">Link 2</a></li>
        <li><a href="#" class="text-reset">Link 3</a></li>
        <li><a href="#" class="text-reset">Link 4</a></li>
        <li><a href="#" class="text-reset">Link 5</a></li>
      </ul> */} -->
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
    
</body>
</html>
