<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/App.css">
    <link rel="stylesheet" href="../CSS/iconos.css">
    <link rel="stylesheet" href="../CSS/nav.css">  
    <link rel="stylesheet" href="../CSS/fondos.css"> 
    <link rel="stylesheet" href="../CSS/cabecera.css"> 
    <link rel="stylesheet" href="../CSS/formulario.css"> 
    <script src="../INICIO/CSS/script.js" defer></script>
    <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss"> 
        <div class="cabeceraCssAzul"></div>
        <div class="cabeceraCssAzulClaro"></div>
        <div class="cabeceraCssBlanca"></div>
        <div class="textoCabecera h3">UNIVERSIDAD MAYOR DE SAN SIMON</div>
        <div class="textoCabeceraUniverisdad h3">FACULTAD DE CIENCIAS Y TECNOLOGIA</div>
        <img class="logoUmssCss" src="../../INICIO/IMAGENES/LogoUMSS.png" alt="">
       
    
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
              <li><a href="{{ url('/docente/dashboard') }}">Inicio</a></li>
              <li><a href="{{ route('docente.convocatoriasD') }}">Agregar convocatoria</a></li>
                <li><a href="">Agregar/Editar Aviso</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            </div>
          </nav>
        </header>
         <div class="container mt-5 formulario">
          <h1>AVISOS</h1>
          <form class="row g-3">
            <div class="col-md-4">
              <label for="firstName" class="form-label">Titulo:</label>
              <input type="text" class="form-control" id="" required>
            </div>
            <div  class="col-md-12">Fecha:
            <input Style="margin-left: 40px;" type="date" value="2021-09-30" min="2021-01-01" max="2021-12-31">
            </div>
            <div class="col-md-2">
              <label for="lastName" class="form-label">Codigo:</label>
              <input type="text" class="form-control" id="" required>
            </div> 
            
            <div class="dropdown"> Semestre:
              <button Style="margin-left: 20px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Elegir semestre:
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Primer Semestre</a></li>
                <li><a class="dropdown-item" href="#">Segundo Semestre</a></li>
              
              </ul>

            </div>
            <div class="form-floating">
              
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Escribir Aviso</label>
            </div>

            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" class="btn btn-primary" style="background-color: #215f88;">Publicar</button>
              <button type="submit" class="btn btn-primary" style="background-color: #215f88 ;">Cancelar</button>
            </div>
          </form>
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