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
    @yield('content')
    

        <!--MENU NAVBAR  -->

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