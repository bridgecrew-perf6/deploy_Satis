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
    <title>Inicio</title>
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
              Usuario: {{$usuarios->nombre}}
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
<div>
  <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
</div>

<body>
        <header>
          <nav class="navbar" >
            <div class="brand-title"><div class="brand-title"> 
              @if($usuarios->tipo==1)
              ADMINISTRADOR
              @endif
            </div></div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li class="nav-item {{!Route::is('admin.inicioA')?:'active'}}"><a href="{{ route('admin.inicioA') }}">Inicio</a></li>
                <li class="nav-item {{!Route::is('admin.lista')?:'active'}}"><a href="{{ route('admin.lista') }}">Lista de empresas</a></li>
                <li class="nav-item {{!Route::is('admin.docentes')?:'active'}}"><a href="{{ route('admin.docentes') }}">Lista de docentes</a></li>
                <li class="nav-item {{!Route::is('auth.registre2')?:'active'}}"><a href="{{ route('auth.register2') }}">Registrar docentes</a></li>
            
          </ul>
        </div>
      </nav>
        </header>
          {{ Breadcrumbs::render('auth.register2') }}
  <div class="container  mt-5 formulario">
       <div class="formCyA">
        <h1 Style="text-align: center;">REGISTRAR DOCENTE</h1>
           <form action="{{ route('auth.save2') }}" method="post">

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
                 <label>Nombre Completo</label>
                 <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}">
                 <span class="text-danger kw" translate="yes">  @error('name'){{ $message }} @enderror</span>
              </div>  
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email"  placeholder="Ingrese su Email" value="{{ old('email') }}">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
             </div>            
              <div class="form-group">
                 <label>Contraseña</label>
                 <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña" >
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button Style=" background-color: #215f88; margin-top: 50px; " type="submit" class="btn btn-primary" >Registrar</button>
              <br>
                          
           </form>
          </div>
        </div>
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

