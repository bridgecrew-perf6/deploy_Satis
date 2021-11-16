<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/App.css">
    <link rel="stylesheet" href="CSS/iconos.css">
    <link rel="stylesheet" href="CSS/nav.css">  
    <link rel="stylesheet" href="CSS/fondos.css"> 
    <link rel="stylesheet" href="CSS/cabecera.css"> 
    <link rel="stylesheet" href="CSS/formulario.css"> 
    <script src="CSS/script.js" defer></script>
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
      <title>RegistrarFundaEmpresa</title>
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
                <li><a href="{{ url('/estudiante/dashboard') }}">Inicio</a></li>
                <li><a href="#">Registrar funda empresa TIS</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
        </header>
        <div class="container mt-5 formulario">
          <h1
          Style="text-align: center;">Registrar Grupo-Empresa</h1>
          <div class="card formFunda">
          
          <form id="funda" class="row g-3" method="post" action="{{ route('auth.save3') }}" enctype="multipart/form-data">
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
            
            <div class="col-md-4">
              <label for="nombreC" class="form-label">Nombre corto*</label>
              <input type="text" class="form-control" name="nombreC" required>
              <span class="text-danger">@error('nombreC'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-6">
              <label for="nombreL" class="form-label">Nombre Largo*</label>
              <input type="text" class="form-control" name="nombreL" required>
              <span class="text-danger">@error('nombreL'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-10">
              <label for="integrantes" class="form-label">Integrantes</label>
              <textarea rows="6" cols="60" class="form-control" name="integrantes" form="funda"
              placeholder="1.Integrante1&#10;2.Integrante2&#10;3.Integrante3&#10;4.Integrante4&#10;5.Integrante5&#10;"></textarea>
              <span class="text-danger">@error('integrantes'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-10">
              <label for="representante" class="form-label">Representante Legal</label>
              <input type="text" class="form-control" name="representante" >
              <span class="text-danger">@error('representante'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-10">
              <label for="correo" class="form-label">Correo de la empresa</label>
              <input type="email" class="form-control" name="correo" >
              <span class="text-danger">@error('correo'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-10">
              <label for="telefono" class="form-label">Telefono de la empresa</label>
              <input type="text" class="form-control" name="telefono" >
              <span class="text-danger">@error('telefono'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-10">
              <label for="direccion" class="form-label">Direccion de la empresa</label>
              <input type="text" class="form-control" name="direccion" >
              <span class="text-danger">@error('direccion'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-10">Los campos con (*) son obligatorios</div>
            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" class="btn btn-primary" style="background-color: #215f88 ;">Registrar</button>              
            </div>
          </form>
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
