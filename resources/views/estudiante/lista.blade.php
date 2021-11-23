<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiante</title>
    <link rel="stylesheet" href="{{ asset('bootstrap@5.1.3/dist/css/bootstrap.min.css') }}">
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
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
</header>
<body>
    
    <section>
        <div class="container mt-5 mb-5 ">
        <div class=" row d-flex justify-content-between cards ">
          <div class="col-sm-6">
            <h2><label for="empresas" class="form-label">Grupo Empresas</label></h2>
                <style>
                    table, th, td {
                        border: 2px solid black;
                        padding: 10px;
                    }
                </style>
                <table name="empresas" border="1">
                    <tr>
                            <th class="text-center" border="1">Nombre corto</th>
                            <th class="text-center" border="1">Nombre Largo</th>
                    </tr>
                    
                    @foreach($data as $key=>$item)
                        
                        <tr>
                            <td align="center">
                                {{$item->nombreC}}
                                
                            </td>
                            <td>
                                {{$item->nombreL}}                                
                            </td>
                        </tr>
                        
                    @endforeach
                    
                </table>
          </div>
            
        </div>
        </div>
    </section>
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
<!--
<ul>
                       <li><a href="/admin/dashboard">Dashboard</a></li>
                       <li><a href="/admin/profile">Profile</a></li>
                       <li><a href="/admin/settings">Settings</a></li>
                       <li><a href="/admin/staff">Staff</a></li>
                   </ul>
