@extends('layouts.plantilla')

@section('content')

<div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/auth/login') }}">Iniciar Sesión</a></li>
            
          </ul>
        </div>
      </nav>
@endsection

@section('cuerpo')
<body>
  <div class="container">
    <div class="row justify-content-center pt-5 mt-5 m-1 caja">
        <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
            <form action="">
                <div class="form-group text-center pt-3">
                    <h1 class="text-dark">INICIAR SESIÓN</h1>
                </div>
                <div class="form-group mx-sm-4 pt-3">
                    <input type="text" class="form-control" placeholder="Ingrese su Usuario">
                </div>
                <div class="form-group mx-sm-4 pb-3">
                    <input type="text" class="form-control" placeholder="Ingrese su Contraseña">
                </div>
                <div class="form-group mx-sm-4 pb-2">
                    <input type="submit" class="btn btn-block ingresar" value="INGRESAR">
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
