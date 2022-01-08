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
        
          <section>
        
            {{ Breadcrumbs::render('admin.lista') }}
            <div class="container mt-5 mb-5 ">
            <div class=" row d-flex justify-content-between cards ">
             <h2 class="align-items-center avisos text-light">
                FUNDA EMPRESA
                </h2>
              <table class="table tabla">
                <h1 class="text-center">Seleccione su empresa</h1>
                  <div class="col-md-1">Año:
                      <select name="gestion" class="form-control" required>
                        <option value="2021">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                      </select>
                      
                  </div>
              
              <div class="col-md-2"> Elegir semestre :


                <select name="semestre" class="form-control " required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>

            </div>
                <thead class="tablaL">
                  
                  <th class="text-center" border="1">Nombre corto</th>
                  <th class="text-center" border="1">Nombre Largo</th>
                  <th class="text-center" border="1">Gestión</th>
                  <th class="text-center" border="1">Docente</th>
                </thead>
                <tbody>
                   @foreach($data as $key=>$item)
                            
                  <tr>
                  
              
                      <td align="center">
                          {{$item->nombreC}}
                          
                      </td>
                      <td align="center">
                          {{$item->nombreL}}                                
                      </td>
                      <td align="center">
                        {{$item->gestion}}                                
                      </td>
            
                      <td align="center">
                        {{$item->nombre}}                           
                      </td>

                  </tr>
                  
              @endforeach
                </tbody>
              </table>
             
             
             
              {{--  <div class="col-sm-6">
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
              </div> --}}
                
            </div>
            </div>
        </section>
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

