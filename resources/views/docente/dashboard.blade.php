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
                <li><a href="{{ route('docente.inicioD') }}">Inicio</a></li>
                <li><a href="{{ route('docente.convocatoriasD') }}">Agregar convocatoria</a></li>
                <li><a href="{{ route('docente.avisosD') }}">Agregar Avisos</a></li>
                <li><a href="{{ url('/docente/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
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
        Publicacion de convocatoria TIS
      </h2>
      <div class="card ">
      
       


      
       
        <div class="card-body">
        
        </div>
      </div>
    </div>

    <div class="col-sm-5 avisotes">
      <h2 class="align-items-center avisos text-light">
        Avisos
      </h2>



<div class = "cars">
      <div class="cardazo">

        <div class="card-body">
   
     
        </div>
      </div>
     {{--  <div class="cardazo">

        <div class="card-body">
          <h5 class="card-title">Aviso importante   :</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

        </div>
      </div> --}}
      </div> 
    </div>
  </div>
</div>
</section>
@endsection