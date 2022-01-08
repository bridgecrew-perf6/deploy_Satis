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

  <div class=" ">
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
<section>

  <div class="mt-1 mb-1 ">
    <div class=" row d-flex justify-content-between cards ">
      <div class="col-sm-6 avisotes">
        <h2 class="align-items-center avisos text-light">
          Publicacion de convocatoria TIS
        </h2>
        <div class="card ">
          @foreach ($convocatorias as $convocatorias)
            <h5 class="card-title text-ligth">{{$convocatorias->name }}</h5>

            <p class="card-text">link documento:
         {{$convocatorias->nombre }}</p>
            <p class="card-text">codigo: {{$convocatorias->codigo }}</p>
            <p class="card-text">Gestion: {{$convocatorias->gestion }}</p>
            <p class="card-text">Semestre: {{$convocatorias->semestre}}</p>
            
            @endforeach
          <div class="card-body">

          </div>
        </div>
      </div>

      <div class="col-sm-6 avisotes">
        <h2 class="align-items-center avisos text-light">
          Avisos
        </h2>
        <div class="cardazo">
          @foreach ($avisos as $avisos)
          <h2 class="card-title text-ligth">{{$avisos->name }}</h2>

          <p class="card-text">{{$avisos->descripcion }}</p>
          <p class="card-text">codigo: {{$avisos->codigo }}</p>
          <p class="card-text">Gestion: {{$avisos->gestion }}</p>
          <p class="card-text">Semestre: {{$avisos->semestre}}</p>
          @endforeach
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
@endsection
