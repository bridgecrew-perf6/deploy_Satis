@extends('layouts.plantillaD')
@section('content')
          <nav class="navbar" >
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                <li><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                <li><a href="{{ route('estudiante.documentosB') }}">Documentos base</a></li>
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
        </div>
      </nav>
      @endsection
    
@section('cuerpo')
      <section>
        <div class="container mt-5 mb-5 ">
        <div class=" row d-flex justify-content-between cards ">
          <div class="col-sm-6">
            <h2 class="align-items-center avisos text-light">
              Usted no cuenta con una empresa, por favor registre una
            </h2>
            
            
          </div>
          </div>
        </div>  
      </section>

@endsection
