@extends('layouts.plantillaInicio')
@section('content')
<nav class="navbar ">
  <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
  <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
  </a>
  <div class="navbar-links">
      <ul>
          <li class="nav-item {{ !Route::is('home') ?: 'active' }}"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="nav-item {{ !Route::is('lista.inicio') ?: 'active' }}"><a class="navbar-link"
                  href="{{ route('lista') }}">Lista de empresas</a></li>
          <li class="nav-item {{!Route::is('auth.login')?:'active'}}"><a href="{{route('auth.login') }}">Iniciar Sesión</a></li>


      </ul>
  </div>
</nav>
{{ Breadcrumbs::render('home') }}

    </header>
@endsection


@section('cuerpo')
<section>

  <div class="mt-5 mb-5 ">
      <div class=" row d-flex justify-content-between inicio ">
          <div class="col-sm-12 inicio1">
              <h2 class="align-items-center avisos text-light">
                  Bienvenidos.!
              </h2>
              <div class="card ">
                  <div>
                      <h2 class="textos">Sistema de Apoyo </h2>
                      <h2 class="textos"> a la Empresa TIS</h2>
                  </div>
                  <h5 class="card-title text-ligth inicio2">La empresa TIS, tiene como misión realizar consultorías
                      para la mejora de
                      procesos de desarrollo de software, trabaja directamente con
                      las empresas consultadas y su equipo en la prestación de servicios.</h5>

                  <div class="card-body">

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
